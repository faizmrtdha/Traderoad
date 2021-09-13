var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 50,
    slidesPerGroup: 1,
    loop: true,
    mousewheel: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        992: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 111,
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
    },
});
$(document).ready(function () {
    $(window).scroll(function () {
        const screenHeight = $(window).height();
        var scroll = $(window).scrollTop();
        if (scroll > screenHeight) {
            $(".fixed-top").css("background", "#373737");
        } else {
            $(".fixed-top").css("background", "rgba(55, 55, 55, 0.85)");
        }
    });
    $('.tujuan').on('click', function(e){
        var href = $(this).attr('href');
        var elementHref = $(href);
        // console.log(elementHref.offset().top);

        $('body').animate({
            scrollTop: elementHref.offset().top
        });

        e.preventDefault();
    })
});
