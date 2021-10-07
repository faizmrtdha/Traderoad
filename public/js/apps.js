var swiper = new Swiper(".swiper", {
    slidesPerView: 3,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: true,
    mousewheel: false,
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
        1025: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 40,
        },
        992: {
            slidesPerView: 2,
            slidesPerGroup: 1,
            spaceBetween: 40,
        },
        767: {
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

        280: {
            slidesPerGroup: 1,
            slidesPerView: 1,
            spaceBetween: 10,
        },
    },
});
$(document).ready(function () {
    $(window).scroll(function () {
        const screenHeight = $(window).height();
        var scroll = $(window).scrollTop();
        console.log(scroll);
        if (scroll > screenHeight) {
            $("#menu").css("background", "#383838");
        } else {
            $("#menu").css("background", "rgba(55, 55, 55, 0.85)");
        }
    });

    $("#fullpage").fullpage({
        fixedElements: ".fixed-top",
        navigation: false,
        autoScrolling: true,
        responsiveWidth: 1200,
        scrollingSpeed: 1200,
        animateAnchor: true,
        lockAnchors: false,
        lazyLoading: true,
        recordHistory: false,
        anchors: [
            "banner",
            "about-us",
            "keyfeature",
            "our-product",
            "our-warehouse",
            "our-team",
            "our-contact",
        ],
        menu: "#navbarNavDropdown",
    });
    $.fn.fullpage.setAllowScrolling(true);
});
