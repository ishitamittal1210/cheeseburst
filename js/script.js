// let navbar = document.querySelector('.header .flex .navbar');
// let profile = document.querySelector('.header .flex .profile');

// document.querySelector('#menu-btn').onclick = () =>{
//    navbar.classList.toggle('active');
//    profile.classList.remove('active');
// }

// document.querySelector('#user-btn').onclick = () =>{
//    profile.classList.toggle('active');
//    navbar.classList.remove('active');
// }

// window.onscroll = () =>{
//    profile.classList.remove('active');
//    navbar.classList.remove('active');
// }

function loader(){
   document.querySelector('.loader').style.display = 'none';
}

function fadeOut(){
   setInterval(loader, 2000);
}

window.onload = fadeOut;




var book_table = new Swiper(".book-table-img-slider", {
   slidesPerView: 1,
   spaceBetween: 20,
   loop: true,
   autoplay: {
       delay: 3000,
       disableOnInteraction: false,
   },
   speed: 2000,
   effect: "coverflow",
   coverflowEffect: {
       rotate: 3,
       stretch: 2,
       depth: 100,
       modifier: 5,
       slideShadows: false,
   },
   loopAdditionSlides: true,
   navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
   },
   pagination: {
       el: ".swiper-pagination",
       clickable: true,
   },
});

// var team_slider = new Swiper(".team-slider", {
//    slidesPerView: 3,
//    spaceBetween: 30,
//    loop: true,
//    autoplay: {
//        delay: 3000,
//        disableOnInteraction: false,
//    },
//    speed: 2000,

//    navigation: {
//        nextEl: ".swiper-button-next",
//        prevEl: ".swiper-button-prev",
//    },
//    pagination: {
//        el: ".swiper-pagination",
//        clickable: true,
//    },
//    breakpoints: {
//        0: {
//            slidesPerView: 1.2,
//        },
//        768: {
//            slidesPerView: 2,
//        },
//        992: {
//            slidesPerView: 3,
//        },
//        1200: {
//            slidesPerView: 3,
//        },
//    },
// });
