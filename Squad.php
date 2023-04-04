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
   <title>squad</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<!-- Font Awesome 5.15.1 CSS -->

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>






<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="css/donate.css" rel="stylesheet" type="text/css" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" />


</head>
<body class="tm-isblog tt-players-page">
   
<?php include 'components/user_header.php'; ?>

<section class="management">

   
    

   
<div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
<div class="uk-container uk-container-center">
    <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

        <div class="uk-width-1-1 uk-row-first">
            <div class="uk-panel">
                <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg.jpg');">
                    <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                    <div class="uk-position-cover uk-flex uk-flex-center head-title">
                        <h1>squad</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>

<div class="uk-container uk-container-center alt">
<ul class="uk-breadcrumb">
    <li><a href="index.html">Home</a>
    </li>
    <li class="uk-active"><span>Players</span>
    </li>
</ul>
</div>


<div class="uk-container uk-container-center">
<div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
    <div class="tm-main uk-width-medium-1-1 uk-row-first">
        <main id="tm-content" class="tm-content">

            

            <div class="list-players-wrapper">
                <div class="uk-sticky-placeholder">
                    <div class="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                        <div class="uk-container uk-container-center">
                            <div class="label-menu">OUR team</div>
                            <button class="active" data-filter="*">all
                            </button>
                            <button data-filter=".tt_2a195f12da9f3f36da06e6097be7e451">DEFENDER
                            </button>
                            <button data-filter=".tt_22c19cd174143e3b4c7ef40ae23c5d1a">STRIKER
                            </button>
                            <button data-filter=".tt_81747b4426a9882884c1f83eda78844f">goalkeeper
                            </button>
                            <button data-filter=".tt_4d957768dcc72908ab3b9e28dc867052">MIDFIELDER
                            </button>
                        </div>
                    </div>
                </div>
                <div class="list-players-wrap" id="boundary">
                    <div class="left-player">
                        <img src="images/left-player-bg.png" alt="">
                    </div>
                    <div class="right-player">
                        <img src="images/right-player-bg.png" alt="">
                    </div>
                    <div class="uk-container uk-container-center alt">
                        <div class="uk-grid grid1 players-list">
                            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                <div class="player-article">
                                    <div class="wrapper">
                                        <div class="img-wrap">
                                            <div class="player-number">
                                                <span>
                                                21                
                                                </span>
                                            </div>
                                            <div class="bio">
                                                <span>
                                                <a href="player.php">bio
                                                </a>
                                                </span>
                                            </div>
                                            <a href="player.php">
                                            <img src="images/494a6c4fd56d9d2af64b92b6337db693.jpg" class="img-polaroid" alt="Steven Webb" title="Steven Webb">
                                            </a>
                                            <ul class="socials">
                                                <li class="twitter">
                                                    <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <h3>
                                                    <a href="player.php">
                                                    Steven Webb                    
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="position">
                                                DEFENDER 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                <div class="player-article">
                                    <div class="wrapper">
                                        <div class="img-wrap">
                                            <div class="player-number">
                                                <span>
                                                19                
                                                </span>
                                            </div>
                                            <div class="bio">
                                                <span>
                                                <a href="player.php">bio
                                                </a>
                                                </span>
                                            </div>
                                            <a href="player.php">
                                            <img src="images/df207a70fca3a58b07082ce9aca2c538.jpg" class="img-polaroid" alt="John Montgomery" title="John Montgomery">
                                            </a>
                                            <ul class="socials">
                                                <li class="twitter">
                                                    <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <h3>
                                                    <a href="player.php">
                                                    John Montgomery                    
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="position">
                                                STRIKER 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_81747b4426a9882884c1f83eda78844f">
                                <div class="player-article">
                                    <div class="wrapper">
                                        <div class="img-wrap">
                                            <div class="player-number">
                                                <span>
                                                35                
                                                </span>
                                            </div>
                                            <div class="bio">
                                                <span>
                                                <a href="player.php">bio
                                                </a>
                                                </span>
                                            </div>
                                            <a href="player.php">
                                            <img src="images/bd84c3b0e76d2dd99a75ac9ca2f6ec06.jpg" class="img-polaroid" alt="Johnny Thompson" title="Johnny Thompson">
                                            </a>
                                            <ul class="socials">
                                                <li class="twitter">
                                                    <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <h3>
                                                    <a href="player.php">
                                                    Johnny Thompson                    
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="position">
                                                goalkeeper 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                <div class="player-article">
                                    <div class="wrapper">
                                        <div class="img-wrap">
                                            <div class="player-number">
                                                <span>
                                                07                
                                                </span>
                                            </div>
                                            <div class="bio">
                                                <span>
                                                <a href="player.php">bio
                                                </a>
                                                </span>
                                            </div>
                                            <a href="player.php">
                                            <img src="images/f9bfc5bc85499506c9e18e5afb2eaf2d.jpg" class="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza">
                                            </a>
                                            <ul class="socials">
                                                <li class="twitter">
                                                    <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <h3>
                                                    <a href="player.php">
                                                    Benjamin Mendoza                    
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="position">
                                                DEFENDER 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                <div class="player-article">
                                    <div class="wrapper">
                                        <div class="img-wrap">
                                            <div class="player-number">
                                                <span>
                                                47                
                                                </span>
                                            </div>
                                            <div class="bio">
                                                <span>
                                                <a href="player.php">bio
                                                </a>
                                                </span>
                                            </div>
                                            <a href="player.php">
                                            <img src="images/70d6fcd7a5ed8edc8acc6b52c76d7ff4.jpg" class="img-polaroid" alt="Joe Perez" title="Joe Perez">
                                            </a>
                                            <ul class="socials">
                                                <li class="twitter">
                                                    <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <h3>
                                                    <a href="player.php">
                                                    Joe Perez                    
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="position">
                                                STRIKER 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_4d957768dcc72908ab3b9e28dc867052">
                                <div class="player-article">
                                    <div class="wrapper">
                                        <div class="img-wrap">
                                            <div class="player-number">
                                                <span>
                                                23                
                                                </span>
                                            </div>
                                            <div class="bio">
                                                <span>
                                                <a href="player.php">bio
                                                </a>
                                                </span>
                                            </div>
                                            <a href="player.php">
                                            <img src="images/450032a6f795065465ebb3d698d74294.jpg" class="img-polaroid" alt="Bobby Guerrero" title="Bobby Guerrero">
                                            </a>
                                            <ul class="socials">
                                                <li class="twitter">
                                                    <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <h3>
                                                    <a href="player.php">
                                                    Bobby Guerrero                    
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="position">
                                                MIDFIELDER 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                <div class="player-article">
                                    <div class="wrapper">
                                        <div class="img-wrap">
                                            <div class="player-number">
                                                <span>
                                                14                
                                                </span>
                                            </div>
                                            <div class="bio">
                                                <span>
                                                <a href="player.php">bio
                                                </a>
                                                </span>
                                            </div>
                                            <a href="player.php">
                                            <img src="images/a0cd8e2687c86ec4810f4adec5724bba.jpg" class="img-polaroid" alt="Douglas Pain" title="Douglas Pain">
                                            </a>
                                            <ul class="socials">
                                                <li class="twitter">
                                                    <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <h3>
                                                    <a href="player.php">
                                                    Douglas Pain                    
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="position">
                                                DEFENDER 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                <div class="player-article">
                                    <div class="wrapper">
                                        <div class="img-wrap">
                                            <div class="player-number">
                                                <span>
                                                36                
                                                </span>
                                            </div>
                                            <div class="bio">
                                                <span>
                                                <a href="player.php">bio
                                                </a>
                                                </span>
                                            </div>
                                            <a href="player.php">
                                            <img src="images/8a3d3554567e4859f88a93ac59e1eadc.jpg" class="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera">
                                            </a>
                                            <ul class="socials">
                                                <li class="twitter">
                                                    <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <h3>
                                                    <a href="player.php">
                                                    Christopher Herrera                    
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="position">
                                                STRIKER 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>
    </div>
</div>
</div>




            


</div>

<div id="offcanvas" class="uk-offcanvas">
<div class="uk-offcanvas-bar">
    <ul class="uk-nav uk-nav-offcanvas">
        <li class="uk-parent uk-active"><a href="index.html">Home</a>
            <ul class="uk-nav-sub">
                <li><a class="yellow-scheme" href="index.html">Yellow Color Scheme</a>
                </li>
                <li><a class="blue-scheme" href="http://h-  ak.torbara.com/blue/index.html">Blue Color Scheme</a>
                </li>
                <li><a class="red-scheme" href="http://h-  ak.torbara.com/red/index.html">Red Color Scheme</a>
                </li>
                <li><a href="offline.html">Offline Page</a>
                </li>
                <li><a href="404.html">Error Page</a>
                </li>
            </ul>
        </li>
        <li><a href="about.html">About</a></li>
        <li class="uk-parent uk-active"><a href="#">Pages</a>
            <ul class="uk-nav-sub">
                <li><a href="players.php">Players</a>
                </li>
                <li><a href="gallery.html">Gallery</a>
                </li>
            </ul>
        </li>
        <li class="uk-parent"><a href="match-list.html">Match</a>
            <ul class="uk-nav-sub">
                <li><a href="results.html">Results</a>
                </li>
            </ul>
        </li>
        <li><a href="news.html">News</a>
        </li>
        <li><a href="category.html">Shop</a>
        </li>
        <li><a href="contact.html">Contact</a>
        </li>
    </ul>
</div>
</div>
</div>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="js/components/grid.js"></script>
<script type="text/javascript" src="js/components/slider.js"></script>
<script type="text/javascript" src="js/components/slideshow.js"></script>
<script type="text/javascript" src="js/components/slideset.js"></script>
<script type="text/javascript" src="js/components/sticky.js"></script>
<script type="text/javascript" src="js/components/lightbox.js"></script>
<script type="text/javascript" src="js/components/accordion.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>

</body>

</html>
<?php include 'components/footer.php'; ?>
