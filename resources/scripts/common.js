// JavaScript to be fired on all pages
jQuery( document ).ready(function($) {
  var check_rtl = false;
  if ($('html').attr('lang') == 'ar' || $('html').attr('dir') == 'rtl') {
    check_rtl = true;
  } else {
    check_rtl = false;
  }


  // ===== Slick Slider =====
  // Slider
  $('.slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    speed: 3000,
    arrows: false,
    dots: true,
    rtl: check_rtl,
    pauseOnHover: true,
    pauseOnFocus: true,
    responsive: [
      {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
          },
      },
      {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          },
      },
      ],
  });
});

