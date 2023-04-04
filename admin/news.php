<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};

if(isset($_POST['add_news'])){

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

   

   $select_news = $conn->prepare("SELECT * FROM `news` WHERE name = ?");
   $select_news->execute([$name]);

   if($select_news->rowCount() > 0){
      $message[] = 'news name already exist!';
   }else{

      $insert_news = $conn->prepare("INSERT INTO `news`(name, details, year, image_01) VALUES(?,?,?,?)");
      $insert_news->execute([$name, $details, $year, $image_01, ]);

      if($insert_news){
         if($image_size_01 > 2000000){
            $message[] = 'image size is too large!';
         }else{
            move_uploaded_file($image_tmp_name_01, $image_folder_01);
                      $message[] = 'new news added!';
         }

      }

   }  

};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_news_image = $conn->prepare("SELECT * FROM `news` WHERE id = ?");
   $delete_news_image->execute([$delete_id]);
   $fetch_delete_image = $delete_news_image->fetch(PDO::FETCH_ASSOC);
   unlink('../uploaded_img/'.$fetch_delete_image['image_01']);
     $delete_news = $conn->prepare("DELETE FROM `news` WHERE id = ?");
   $delete_news->execute([$delete_id]);
   $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE pid = ?");
   $delete_cart->execute([$delete_id]);
   $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE pid = ?");
   $delete_wishlist->execute([$delete_id]);
   header('location:news.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>news</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="add-news">

   <h1 class="heading">add news</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>news name (required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="enter news name" name="name">
         </div>
         <div class="inputBox">
            <span>news year (required)</span>
            <input type="text" min="0" class="box" required max="9999999999" placeholder="enter news year" onkeypress="if(this.value.length == 10) return false;" name="year">
         </div>
        <div class="inputBox">
            <span>image 01 (required)</span>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
       
         <div class="inputBox">
            <span>news details (required)</span>
            <textarea name="details" placeholder="enter news details" class="box" required maxlength="500" cols="30" rows="10"></textarea>
         </div>
      </div>
      
      <input type="submit" value="add news" class="btn" name="add_news">
   </form>

</section>

<section class="show-news">

   <h1 class="heading">news added</h1>

   <div class="box-container">

   <?php
      $select_news = $conn->prepare("SELECT * FROM `news`");
      $select_news->execute();
      if($select_news->rowCount() > 0){
         while($fetch_news = $select_news->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <div class="box">
      <img src="../uploaded_img/<?= $fetch_news['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_news['name']; ?></div>
      <div class="year"><span><?= $fetch_news['year']; ?></span>/-</div>
      <div class="details"><span><?= $fetch_news['details']; ?></span></div>
      <div class="flex-btn">
         <a href="update_news.php?update=<?= $fetch_news['id']; ?>" class="option-btn">update</a>
         <a href="news.php?delete=<?= $fetch_news['id']; ?>" class="delete-btn" onclick="return confirm('delete this news?');">delete</a>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no news added yet!</p>';
      }
   ?>
   
   </div>

</section>








<script src="../js/admin_script.js"></script>
   
</body>
</html>