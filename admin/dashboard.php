<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="dashboard">

   <h1 class="heading">dashboard</h1>

   <div class="box-container">

      <div class="box">
         <h3>welcome!</h3>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="update_profile.php" class="btn">update profile</a>
      </div>

     
      <div class="box">
         <?php
            $select_history = $conn->prepare("SELECT * FROM `history`");
            $select_history->execute();
            $number_of_history = $select_history->rowCount()
         ?>
         <h3><?= $number_of_history; ?></h3>
         <p>history added</p>
         <a href="history.php" class="btn">see history</a>
      </div>
   

      <div class="box">
         <?php
            $select_management = $conn->prepare("SELECT * FROM `management`");
            $select_management->execute();
            $number_of_management = $select_management->rowCount()
         ?>
         <h3><?= $number_of_management; ?></h3>
         <p>management added</p>
         <a href="management.php" class="btn">see management</a>
      </div>
      <div class="box">
         <?php
            $select_news = $conn->prepare("SELECT * FROM `news`");
            $select_news->execute();
            $number_of_news = $select_news->rowCount()
         ?>
         <h3><?= $number_of_news; ?></h3>
         <p>news added</p>
         <a href="news.php" class="btn">see news</a>
      </div>
      <div class="box">
         <?php
            $select_users = $conn->prepare("SELECT * FROM `users`");
            $select_users->execute();
            $number_of_users = $select_users->rowCount()
         ?>
         <h3><?= $number_of_users; ?></h3>
         <p>normal users</p>
         <a href="users_accounts.php" class="btn">see users</a>
      </div>

      <div class="box">
         <?php
            $select_admins = $conn->prepare("SELECT * FROM `admins`");
            $select_admins->execute();
            $number_of_admins = $select_admins->rowCount()
         ?>
         <h3><?= $number_of_admins; ?></h3>
         <p>admin users</p>
         <a href="admin_accounts.php" class="btn">see admins</a>
      </div>

   

   </div>

</section>












<script src="../js/admin_script.js"></script>
   
</body>
</html>