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
   <title>player</title>

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
<body class="tm-isblog tt-player-page">
   
<?php include 'components/user_header.php'; ?>

<section class="management">

   
    

<div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-1-1 uk-row-first">
                    <main id="tm-content" class="tm-content">
                        <div id="system-message-container"></div>
                        <div class="contentpaneopen">
                            <article class="player-single tt-player-page">
                                <div class="uk-container uk-container-center alt">
                                    <div class="uk-gfid">
                                    </div>
                                </div>
                                <div class="player-top">
                                    <div class="uk-container uk-container-center alt">
                                        <div class="uk-grid">
                                            <div class="uk-width-5-12">
                                                <div class="avatar">
                                                    <img src="images/05af8f3689acbb6cff8e90e374ebc2b5.jpg" class="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera">                    
                                                </div>
                                            </div>
                                            <div class="uk-width-1-12">
                                                <div class="number">
                                                    36                    
                                                </div>
                                            </div>
                                            <div class="uk-width-6-12">
                                                <div class="name">
                                                    <h2>
                                                        Christopher Herrera                        
                                                    </h2>
                                                </div>
                                                <div class="wrap">
                                                    <ul class="info">
                                                        <li><span>POSITION</span><span>STRIKER</span></li>
                                                        <li><span>APPEARANCES</span><span>581</span></li>
                                                        <li><span>GOALs</span><span>155</span></li>
                                                        <li><span>YELLOW CARDS</span><span>15</span></li>
                                                        <li><span>RED CARDS</span><span>3</span></li>
                                                        <li><span>D.O.B</span><span>20/08/1985</span></li>
                                                        <li><span>NATIONALITY</span><span>ENGLISH</span></li>
                                                        <li><span>HEIGHT</span><span>2.0M</span></li>
                                                        <li><span>WEIGHT</span><span>81 KG</span></li>
                                                    </ul>
                                                    <ul class="socials">
                                                        <li class="twitter"><a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="facebook"><a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="google-plus"><a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="pinterest"><a href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                        <li class="linkedin"><a href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            <div>
                                <div class="other-player-wrap">
                                    <div class="uk-container uk-container-center alt">
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <h3 class="other-post-title">Other <span>player</span></h3>
                                                <div dir="ltr" class="uk-slidenav-position player-slider" data-uk-slider="">
                                                    <div class="uk-slider-container">
                                                       
                                                        <ul class="uk-slider uk-grid uk-grid-width-1-4">
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>47</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.php">bio</a></span></div>
                                                                            <a draggable="false" href="player.php">
                                                                            <img draggable="false" src="images/70d6fcd7a5ed8edc8acc6b52c76d7ff4.jpg" class="img-polaroid" alt="Joe Perez" title="Joe Perez"></a>                                    
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.php">Joe Perez</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">STRIKER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>21</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.php">bio</a></span></div>
                                                                            <a draggable="false" href="player.php">
                                                                            <img draggable="false" src="images/494a6c4fd56d9d2af64b92b6337db693.jpg" class="img-polaroid" alt="Steven Webb" title="Steven Webb"></a>                                    
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.php">Steven Webb</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">DEFENDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>07</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.php">bio</a></span></div>
                                                                            <a draggable="false" href="player.php">
                                                                            <img draggable="false" src="images/f9bfc5bc85499506c9e18e5afb2eaf2d.jpg" class="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza"></a>                                    
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.php">Benjamin Mendoza</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">DEFENDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>36</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.php">bio</a></span></div>
                                                                            <a draggable="false" href="player.php">
                                                                            <img draggable="false" src="images/8a3d3554567e4859f88a93ac59e1eadc.jpg" class="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera"></a>                                    
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.php">Christopher Herrera</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">STRIKER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>23</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.php">bio</a></span></div>
                                                                            <a draggable="false" href="player.php">
                                                                            <img draggable="false" src="images/450032a6f795065465ebb3d698d74294.jpg" class="img-polaroid" alt="Bobby Guerrero" title="Bobby Guerrero"></a>                                    
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.php">Bobby Guerrero</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">MIDFIELDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>14</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.php">bio</a></span></div>
                                                                            <a draggable="false" href="player.php">
                                                                            <img draggable="false" src="images/a0cd8e2687c86ec4810f4adec5724bba.jpg" class="img-polaroid" alt="Douglas Pain" title="Douglas Pain"></a>                                    
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.php">Douglas Pain</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">DEFENDER</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                            <li class="player-item">
                                                                <div class="player-article">
                                                                    <div class="wrapper">
                                                                        <div class="img-wrap">
                                                                            <div class="player-number">
                                                                                <span>35</span>
                                                                            </div>
                                                                            <div class="bio"><span><a draggable="false" href="player.php">bio</a></span></div>
                                                                            <a draggable="false" href="player.php">
                                                                            <img draggable="false" src="images/bd84c3b0e76d2dd99a75ac9ca2f6ec06.jpg" class="img-polaroid" alt="Johnny Thompson" title="Johnny Thompson"></a>                                    
                                                                            <ul class="socials">
                                                                                <li class="twitter"><a draggable="false" href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="facebook"><a draggable="false" href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="google-plus"><a draggable="false" href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="pinterest"><a draggable="false" href="https://www.pinterest.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="linkedin"><a draggable="false" href="https://www.linkedin.com/" target="_blank" rel="nofollow">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="info">
                                                                            <div class="name">
                                                                                <h3>
                                                                                    <a draggable="false" href="player.php">Johnny Thompson</a>
                                                                                </h3>
                                                                            </div>
                                                                            <div class="position">goalkeeper</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
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
