var swiper = new Swiper(".swiper", {
  slidesPerView: 3,
  spaceBetween: 10,
  slidesPerGroup: 1,
  loop: true,
  mousewheel: false,
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
  on: {
    init: function () {
      checkArrow();
    },
    resize: function () {
      checkArrow();
    },
  },
});

function checkArrow() {
  var swiperPrev = document.querySelector(".swiper-button-prev");
  var swiperNext = document.querySelector(".swiper-button-next");
  if (window.innerWidth > 1024) {
    swiperPrev.style.display = "block";
    swiperNext.style.display = "block";
  } else {
    swiperPrev.style.display = "none";
    swiperNext.style.display = "none";
  }
}

$(document).ready(function () {
  $(window).scroll(function () {
    const screenHeight = $(window).height();
    var scroll = $(window).scrollTop();
    if (scroll > screenHeight) {
      $("#menu").css("background", "#383838");
    } else {
      $("#menu").css("background", "rgba(55, 55, 55, 0.85)");
    }
  });

  const mediaFp = window.matchMedia("(min-width:1200px)");
  function inputFp(mediaFp) {
    if (mediaFp.matches) {
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
          "our-team",
          "our-contact",
        ],
        menu: "#navbarNavDropdown",
      });
      $.fn.fullpage.setAllowScrolling(true);
    }
  }
  const mainId = document.getElementById("fullpage");
  const mediaQuery = window.matchMedia("(max-width:1199px)");
  const aboutUsId = document.querySelector("#about");
  const productUsId = document.querySelector("#product");
  const contactUsId = document.querySelector("#contact");
  function deleteId(mediaQuery) {
    if (mediaQuery.matches) {
      mainId.removeAttribute("id");
      aboutUsId.setAttribute("id", "about-us");
      productUsId.setAttribute("id", "our-product");
      contactUsId.setAttribute("id", "our-contact");
    }
  }
  mediaQuery.addEventListener("change", deleteId);
  deleteId(mediaQuery);
  mediaFp.addEventListener("change", inputFp);
  inputFp(mediaFp);
});
