var interleaveOffset = 1;
var swiperOptions = {
    loop: true,
    speed: 300,
    grabCursor: true,
    SlidesPerView: 3,
    watchSlidesProgress: true,
    mousewheelControl: true,
    keyboardControl: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 3000,
    },

};

var swiper = new Swiper(".swiper-container", swiperOptions);