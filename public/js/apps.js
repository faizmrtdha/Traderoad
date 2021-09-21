var swiper = new Swiper(".swiper", {
    slidesPerView: 3,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: true,
    mousewheel: true,
    // loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        992: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 40,
        },
        768: {
            slidesPerView: 2,
            slidesPerGroup: 1,
            spaceBetween: 10,
        },

        640: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 40,
        },

        480: {
            slidesPerGroup: 1,
            slidesPerView: 1,
            spaceBetween: 20,
        },

        320: {
            slidesPerGroup: 1,
            slidesPerView: 1,
            spaceBetween: 111,
        },
    },
});
$(document).ready(function () {
    $(window).scroll(function () {
        const screenHeight = $(window).height();
        var scroll = $(window).scrollTop();
        if (scroll > screenHeight) {
            $(".fixed-top").css("background", "#383838");
        } else {
            $(".fixed-top").css("background", "rgba(55, 55, 55, 0.85)");
        }
    });
});
// $(".owl-carousel").owlCarousel({
//     loop: true,
//     center: true,
//     items: 3,
//     margin: 30,
//     padding: 5,
//     // stagePadding:5,
//     nav: true,
//     animateOut: "fadeOut",
//     animateIn: "fadeIn",
//     lazyLoad: true,
//     responsiveClass: true,
//     responsive: {
//         0: {
//             items: 1,
//             nav: false,
//         },
//         600: {
//             items: 1,
//             nav: false,
//         },
//         1000: {
//             items: 1,
//             nav: true,
//         },
//         1200: {
//             items: 3,
//             nav: true,
//         },
//     },
// });
// $(".main-carousel").flickity({
//     // options
//     cellAlign: "center",
//     contain: true,
//     lazyLoad: true,
//     groupCells: 1,
// });
