jQuery(document).ready(function ($) {
  //Mob-menu
  $("#header-burger").on("click", function (e) {
    $(this).toggleClass("active");
    $("#menu-wrapper").toggleClass("active");
    $("#notification").toggle();
    $("body").toggleClass("overflow-h");
  });

  //Footer menu
  if ($(window).innerWidth() <= 768) {
    $(".footer-tab-js").on("click", function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).find(".footer-content-js").hide("300");
      } else {
        $(".footer-tab-js").removeClass("active");
        $(this).addClass("active");
        $(".footer-content-js").slideUp(200);
        $(this).find(".footer-content-js").toggle("blind");
      }
    });
  }

  //Hero Swiper
  var heroSwiper = new Swiper(".hero-slider-js", {
    loop: true,
    autoplay: {
      delay: 2000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    on: {
      afterInit: function () {
        if ($(".hero-slider .swiper-slide").length == 3) {
          console.log(123);
          $(".swiper-wrapper").addClass("disabled");
          $(".swiper-pagination").addClass("disabled");
        }
      },
    },
  });

  //Accordion
  $(".accordion-tab-js").click(function (event) {
    event.stopPropagation();
    if ($(this).closest(".accordion-wrapper-js").hasClass("active")) {
      $(this).closest(".accordion-wrapper-js").removeClass("active");
      $(this).closest(".accordion-wrapper-js").find(".accordion-content-js").slideUp(500);
    } else {
      $(this).closest(".accordion-wrapper-js").addClass("active");
      $(this).closest(".accordion-wrapper-js").find(".accordion-content-js").slideDown(500);
    }
  });

  //Tabs
  $(".tab-wrapper-js").on("click", ".tab-js", function (event) {
    var tab = $(this).attr("data-tab");
    $(this).closest(".tab-wrapper-js").find(".tab-js").removeClass("active");
    $(this).addClass("active");

    $(this).closest(".tab-wrapper-js").find(".tab-content-js").hide();
    $(this)
      .closest(".tab-wrapper-js")
      .find(".tab-content-js[data-tab = " + tab + "]")
      .show();
  });

  // slider
  var slider_product = new Swiper(".product_slider", {
    slidesPerView: 2,
    scrollbar: {
      el: ".product-slider_scrollbar",
      hide: true,
    },
  });


});
