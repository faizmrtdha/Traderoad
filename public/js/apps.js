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
        scrollHorizontally: false,
        dragAndMove: false,
        menu: "#menu",
        navigation: false,
        responsiveWidth: 900,
        animateAnchor: true,
        lockAnchors: false,
        lazyLoading: true,
        // anchors: [
        //     "page-banner",
        //     "page-about",
        //     "page-key-feature",
        //     "page-product",
        // ],
        anchors: [
            "banner",
            "about-us",
            "keyfeature",
            "our-product",
            "our-warehouse",
            "our-team",
            "our-contact",
        ],
    });
    $.fn.fullpage.setAllowScrolling(true);

    // $(".main").onepage_scroll({
    //     sectionContainer: ".section", // sectionContainer accepts any kind of selector in case you don't want to use section
    //     easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
    //     // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
    //     animationTime: 1000, // AnimationTime let you define how long each section takes to animate
    //     pagination: true, // You can either show or hide the pagination. Toggle true for show, false for hide.
    //     updateURL: true, // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
    //     beforeMove: function (index) {}, // This option accepts a callback function. The function will be called before the page moves.
    //     afterMove: function (index) {}, // This option accepts a callback function. The function will be called after the page moves.
    //     loop: false, // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
    //     keyboard: false, // You can activate the keyboard controls
    //     responsiveFallback: 900, // You can fallback to normal page scroll by defining the width of the browser in which
    //     // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
    //     // the browser's width is less than 600, the fallback will kick in.
    //     direction: "vertical", // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
    // });
});
