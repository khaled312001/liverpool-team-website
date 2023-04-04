let navbar = document.querySelector('.header .flex .navbar');
let profile = document.querySelector('.header .flex .profile');
const avatar = document.getElementsByClassName("avatar-label");
const selectedAvatar = document.querySelectorAll(".selected-avatar");
function changeAvatar() {
 for (let e = 0; e < avatar.length; e++) {
  avatar[e].addEventListener('click', function() {
   selectedAvatar[e].classList.add('active-avatar');
   if (selectedAvatar[e].classList.contains('active-avatar')) {
    const activeAvatar = document.querySelectorAll(".active-avatar");
    if (activeAvatar.length > 1) {
      activeAvatar[0].classList.remove('active-avatar');
    }
  }
});


}

}
changeAvatar();
document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   profile.classList.remove('active');
}
var swiper = new Swiper('.home-slider', {
   autoplay: {
     delay: 5000,
     disableOnInteraction: false,
   },
 });
let mainImage = document.querySelector('.quick-view .box .row .image-container .main-image img');
let subImages = document.querySelectorAll('.quick-view .box .row .image-container .sub-image img');

subImages.forEach(images =>{
   images.onclick = () =>{
      src = images.getAttribute('src');
      mainImage.src = src;
   }
});