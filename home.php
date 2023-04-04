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
   <title>Liverpool</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<!-- Font Awesome 5.15.1 CSS -->

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>






    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="css/donate.css" rel="stylesheet" type="text/css" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" />
<style>



/* Style for the box image */
.box img {
  max-width: 100%;
  max-height: 100%;
  margin: auto;
  display: flex;
}

/* Style for the box name */
.box .name {
  margin-top: 20px;
  font-weight: bold;
  font-size: 20px;
}

/* Styles for the slider container */


/* Styles for the next/prev buttons */
.w3-button {
  display: inline-block;
  border: none;
  outline: none;
  justify-content: center;
  padding: 8px 16px;
  vertical-align: middle;
  overflow: hidden;
  text-decoration: none;
  color: inherit;
  background-color: #f1f1f1;
  text-align: center;
  cursor: pointer;
  white-space: nowrap;
  font-size: 18px;
  font-weight: bold;
  border-radius: 5px;
  margin: 5px;
  transition: all 0.3s ease-in-out;
}

.w3-button:hover {
  background-color: #ddd;
}

.w3-button:active {
  transform: scale(0.95);
}

/* Styles for the dot buttons */
.demo {
  border: none;
  outline: none;
  padding: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  background-color: #bbb;
  border-radius: 50%;
  margin: 5px;
}

.demo:hover {
  background-color: #555;
  color: #fff;
}

.demo:active {
  transform: scale(0.95);
}

</style>
</head>

<body>

<?php include 'components/user_header.php'; ?>
<?php if (isset($fetch_profile["name"])): ?>
  <h3 style="text-align: center;">Welcome : <?= $fetch_profile["name"]; ?></h3>
<?php endif; ?>


<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">
   <div class="swiper-slide slide">
         <div class="">
         <img src="https://b.fssta.com/uploads/application/soccer/team-logos/liverpool.png" width="500" height="500"  scrolling="no" ></img>
         </div>
         <div class="content">
            <span>Welcome to in </span>
            <h3>Liverpool club</h3>
         </div>
      </div>
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <h3> Club History </h3>
            <a href="history.php" class="btn">History</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-2.png" alt="">
         </div>
         <div class="content">
            <h3>liverpool management</h3>
            <a href="management.php" class="btn">management now</a>
         </div>
      </div>
      
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <h3>Liverpool News</h3>
            <a href="news.php" class="btn">News</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

<section class="history">

   <h1 class="heading">latest news</h1>

   <div class="box-container">

   <div class="w3-content" style="max-width:800px">
  <?php
    $select_news = $conn->prepare("SELECT * FROM `news`"); 
    $select_news->execute();
    if($select_news->rowCount() > 0){
      while($fetch_news = $select_news->fetch(PDO::FETCH_ASSOC)){
  ?>
  <div class="mySlides box">
    <form action="" method="post">
      <input type="hidden" name="pid" value="<?= $fetch_news['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_news['name']; ?>">
      <input type="hidden" name="year" value="<?= $fetch_news['year']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_news['image_01']; ?>">
      <img src="uploaded_img/<?= $fetch_news['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_news['name']; ?></div>
    </form>
  </div>
  <?php
      }
    }
  ?>
  
  <div class="w3-center">
    <div class="w3-section">
      <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
    </div>
  
  

  </div>
</div>
<style>
 /* Styles for the box */

</style>
<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function currentDiv(n) {
    showDivs(slideIndex = n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
  }
  var slideIndex = 1;
showDivs(slideIndex);

var autoNextTimeout;

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
  clearTimeout(autoNextTimeout);
  autoNextTimeout = setTimeout(function() {
    plusDivs(1);
  }, 5000); // change slide after 5 seconds
}

</script>


</section>

<div class="tm-bottom-a-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="about-team-page-top-wrap">
                                <div class="uk-grid">
                                    <div class="uk-width-large-5-10 uk-width-small-1-1 left-part">
                                        <div class="top-title">
                                            <h2>About <span>team</span></h2>
                                        </div>
                                        <p>Liverpool Football Club is a professional football club based in Liverpool, England. The club was founded in 1892 and has since become one of the most successful clubs in English and European football history, with a rich tradition and passionate fan base.

Liverpool has won numerous domestic and international titles, including 19 League titles (including 7 Premier League titles), 8 League Cups, 8 FA Cups, and 6 UEFA Champions League titles, among others. The club is also known for its iconic home stadium, Anfield, which has a capacity of over 54,000 spectators.

The team has a storied history and has featured some of the greatest players in football history, including Kenny Dalglish, Ian Rush, Steven Gerrard, and more recently, Mohamed Salah, Sadio Mane, and Virgil van Dijk. The club is also known for its intense and passionate fan base, known as the "Kop", which is located in the Spion Kop stand at Anfield and is famous for its loud and boisterous support for the team.

Overall, Liverpool Football Club is one of the most successful and well-known football clubs in the world, with a rich history and passionate fan base that has made it a global icon of the sport.</p>
                                    </div>
                                    <div class="uk-width-large-5-10 uk-width-small-1-1">
                                        <div class="top-banner uk-cover-background uk-position-relative" style="height: 420px; background-image: url('images/about-team-banner.jpg');">
                                            <img class="uk-invisible" src="images/about-team-banner.jpg" alt="">
                                            <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle inner">
                                                “It’s not whether you get knocked
                                                <br> down; it’s whether you get up.”
                                                <div class="name">Vince Lombardi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="tm-bottom-b-box tm-full-width  ">
            <div class="uk-container uk-container-center">
              
            </div>
        </div>

        <div class="tm-bottom-d-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-d" class="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel our-awards-wrap">
                            <div class="uk-width-1-1">
                                <div class="our-awards-title">
                                    <h3>Our <span>Awards</span></h3>
                                </div>
                               
                            <div dir="ltr" class="uk-slidenav-position our-awards" data-uk-slider="{default: 6, autoplay:true, autoplayInterval:7000, animation: 'slide-bottom', duration: 400}">
                                <div class="uk-slider-container">
                                    <ul class="uk-slider uk-grid uk-grid-width-large-1-5 uk-grid-width-medium-1-3">
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img5.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
        

       

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="js/SimpleCounter.js"></script>
<script type="text/javascript" src="js/components/grid.js"></script>
<script type="text/javascript" src="js/components/slider.js"></script>
<script type="text/javascript" src="js/components/slideshow.js"></script>
<script type="text/javascript" src="js/components/slideset.js"></script>
<script type="text/javascript" src="js/components/sticky.js"></script>
<script type="text/javascript" src="js/components/lightbox.js"></script>
<script type="text/javascript" src="js/components/accordion.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>




  
</section>
</section>

</body>

</html>

<?php include 'components/footer.php'; ?>









<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 3,
       },
     
     
   },
});

var swiper = new Swiper(".management s-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
