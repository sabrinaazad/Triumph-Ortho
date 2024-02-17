/************************************************************************/
/**************************** GLOBAL SCRIPTS ****************************/
/************************************************************************/

// VARIABLES
var body = $("body");
var win = $(window);
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var mainNavOffset = $("#mainNav")[0].offsetTop;
var question = $(".section--faqs .question");

$(function () {
  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });

  win.on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
  });
  $(".blogs_slider").slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".four_panels_slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".linkable_slider").slick({
    arrows: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".list_slider").slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".locations_slider").slick({
    infinite: true,
    arrows: false,
    dots: true,
    slidesToShow: 1,
    cssEase: "ease-out",
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".service_slider").slick({
    infinite: true,
    arrows: true,
    dots: false,
    slidesToShow: 4,
    cssEase: "ease-out",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          infinite: true,
          arrows: true,
          dots: false,
          slidesToShow: 2,
          cssEase: "ease-out",
        },
      },
      {
        breakpoint: 768,
        settings: {
          infinite: true,
          arrows: true,
          dots: false,
          slidesToShow: 1,
          cssEase: "ease-out",
        },
      },
    ],
  });
  $(".testimonials_slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    cssEase: "ease-out",
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          cssEase: "ease-out",
        },
      },
    ],
  });

  question.click(function () {
    $(this).parent().siblings().removeClass("expanded");
    $(this).parent().siblings().find(".arrow-down").removeClass("expanded");
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).toggleClass("expanded");
    $(this).parent().find(".arrow-down").toggleClass("expanded");
    $(this).parent().find(".answer").slideToggle();
  });
});

function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
}

function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
}
