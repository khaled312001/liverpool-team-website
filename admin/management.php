<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};

if(isset($_POST['add_management'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $year = $_POST['year'];
   $year = filter_var($year, FILTER_SANITIZE_STRING);

   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_size_01 = $_FILES['image_01']['size'];
   $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
   $image_folder_01 = '../uploaded_img/'.$image_01;

   
   $select_management = $conn->prepare("SELECT * FROM `management` WHERE name = ?");
   $select_management->execute([$name]);

   if($select_management->rowCount() > 0){
      $message[] = 'management name already exist!';
   }else{

      $insert_management = $conn->prepare("INSERT INTO `management`(name,  year, image_01) VALUES(?,?,?)");
      $insert_management->execute([$name, $year, $image_01]);

      if($insert_management){
         if($image_size_01 > 2000000 ){
            $message[] = 'image size is too large!';
         }else{
            move_uploaded_file($image_tmp_name_01, $image_folder_01);
                 $message[] = 'new management added!';
         }

      }

   }  

};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_management_image = $conn->prepare("SELECT * FROM `management` WHERE id = ?");
   $delete_management_image->execute([$delete_id]);
   $fetch_delete_image = $delete_management_image->fetch(PDO::FETCH_ASSOC);
   unlink('../uploaded_img/'.$fetch_delete_image['image_01']);
     $delete_management = $conn->prepare("DELETE FROM `management` WHERE id = ?");
   $delete_management->execute([$delete_id]);
   $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE pid = ?");
   $delete_cart->execute([$delete_id]);
   $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE pid = ?");
   $delete_wishlist->execute([$delete_id]);
   header('location:management.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>management</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="add-news">

   <h1 class="heading">add management</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>management name (required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="enter management name" name="name">
         </div>
         <div class="inputBox">
            <span>management position (required)</span>
            <input type="text" min="0" class="box" required max="9999999999" placeholder="enter management position" onkeypress="if(this.value.length == 10) return false;" name="year">
         </div>
        <div class="inputBox">
            <span>image 01 (required)</span>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
       
         
      </div>
      
      <input type="submit" value="add management" class="btn" name="add_management">
   </form>

</section>

<section class="show-management">

   <h1 class="heading">management added</h1>

   <div class="box-container">

   <?php
      $select_management = $conn->prepare("SELECT * FROM `management`");
      $select_management->execute();
      if($select_management->rowCount() > 0){
         while($fetch_management = $select_management->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <div class="box">
      <img src="../uploaded_img/<?= $fetch_management['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_management['name']; ?></div>
      <div class="year"><span><?= $fetch_management['year']; ?></span>/-</div>
      <div class="details"><span><?= $fetch_management['details']; ?></span></div>
      <div class="flex-btn">
         <a href="update_management.php?update=<?= $fetch_management['id']; ?>" class="option-btn">update</a>
         <a href="management.php?delete=<?= $fetch_management['id']; ?>" class="delete-btn" onclick="return confirm('delete this management?');">delete</a>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no management added yet!</p>';
      }
   ?>
   
   </div>

</section>








<script src="../js/admin_script.js"></script>
   
</body>
</html>