<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};

if(isset($_POST['add_history'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $year = $_POST['year'];
   $year = filter_var($year, FILTER_SANITIZE_STRING);
   $details = $_POST['details'];
   $details = filter_var($details, FILTER_SANITIZE_STRING);

   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_size_01 = $_FILES['image_01']['size'];
   $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
   $image_folder_01 = '../uploaded_img/'.$image_01;

  

   $select_history = $conn->prepare("SELECT * FROM `history` WHERE name = ?");
   $select_history->execute([$name]);

   if($select_history->rowCount() > 0){
      $message[] = 'history name already exist!';
   }else{

      $insert_history = $conn->prepare("INSERT INTO `history`(name, details, year, image_01) VALUES(?,?,?,?)");
      $insert_history->execute([$name, $details, $year, $image_01]);

      if($insert_history){
         if($image_size_01 > 2000000 ){
            $message[] = 'image size is too large!';
         }else{
            move_uploaded_file($image_tmp_name_01, $image_folder_01);
            
            $message[] = 'new history added!';
         }

      }

   }  

};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_history_image = $conn->prepare("SELECT * FROM `history` WHERE id = ?");
   $delete_history_image->execute([$delete_id]);
   $fetch_delete_image = $delete_history_image->fetch(PDO::FETCH_ASSOC);
   unlink('../uploaded_img/'.$fetch_delete_image['image_01']);
     $delete_history = $conn->prepare("DELETE FROM `history` WHERE id = ?");
   $delete_history->execute([$delete_id]);
   $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE pid = ?");
   $delete_cart->execute([$delete_id]);
   $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE pid = ?");
   $delete_wishlist->execute([$delete_id]);
   header('location:history.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>history</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="add-history">

   <h1 class="heading">add history</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>history name (required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="enter history name" name="name">
         </div>
         <div class="inputBox">
            <span>history year (required)</span>
            <input type="text" min="0" class="box" required max="9999999999" placeholder="enter history year" onkeypress="if(this.value.length == 10) return false;" name="year">
         </div>
        <div class="inputBox">
            <span>image 01 (required)</span>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
       
         <div class="inputBox">
            <span>history details (required)</span>
            <textarea name="details" placeholder="enter history details" class="box" required maxlength="500" cols="30" rows="10"></textarea>
         </div>
      </div>
      
      <input type="submit" value="add history" class="btn" name="add_history">
   </form>

</section>

<section class="show-history">

   <h1 class="heading">history added</h1>

   <div class="box-container">

   <?php
      $select_history = $conn->prepare("SELECT * FROM `history`");
      $select_history->execute();
      if($select_history->rowCount() > 0){
         while($fetch_history = $select_history->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <div class="box">
      <img src="../uploaded_img/<?= $fetch_history['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_history['name']; ?></div>
      <div class="year"><span><?= $fetch_history['year']; ?></span>/-</div>
      <div class="details"><span><?= $fetch_history['details']; ?></span></div>
      <div class="flex-btn">
         <a href="update_history.php?update=<?= $fetch_history['id']; ?>" class="option-btn">update</a>
         <a href="history.php?delete=<?= $fetch_history['id']; ?>" class="delete-btn" onclick="return confirm('delete this history?');">delete</a>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no history added yet!</p>';
      }
   ?>
   
   </div>

</section>








<script src="../js/admin_script.js"></script>
   
</body>
</html>