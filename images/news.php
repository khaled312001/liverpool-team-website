<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>news</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="history">

   <h1 class="heading">latest news</h1>

   <div class="box-container">

   <?php
     $select_news = $conn->prepare("SELECT * FROM `news`"); 
     $select_news->execute();
     if($select_news->rowCount() > 0){
      while($fetch_news = $select_news->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_news['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_news['name']; ?>">
      <input type="hidden" name="year" value="<?= $fetch_news['year']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_news['image_01']; ?>">
      <img src="uploaded_img/<?= $fetch_news['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_news['name']; ?></div>
      <div class="details"><?= $fetch_news['details']; ?></div>

   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no news found!</p>';
   }
   ?>

   </div>

</section>
<?php include 'components/footer.php'; ?>














<script src="js/script.js"></script>

</body>
</html>