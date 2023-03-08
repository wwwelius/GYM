$(function () {
  'use strict';


  //Banner main slider
  $('#banner-part').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
  });

  // Testimonial slider
  $('.test-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  //Client slider
  $('.client-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    prevArrow: '<i class="fas fa-chevron-left"></i>',
    nextArrow: '<i class="fas fa-chevron-right"></i>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          arrows: false,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows:false,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows:false,
        }
      }
    ]
  });

  // venobox for image shoing 
  $('.venobox').venobox();

  //Counter up 
  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });


  //menu fixing

  var navFix = $('.main-menu').offset().top;

  $(window).scroll(function () {
    var scrolling = $(this).scrollTop();

    if (scrolling > navFix) {
      $('.main-menu').addClass('.menu-fixing');
    } else {
      $('.main-menu').removeClass('.menu-fixing');
    }
  });



  // back to top button
  $('.btop-btn').click(function () {
    $('html,body').animate({
      scrollTop: 0,
    }), 2500;
  });

  $(window).scroll(function () {
    var scrlTop = $(this).scrollTop();


    if (scrlTop > 200) {
      $('.btop-btn').fadeIn();
    } else {
      $('.btop-btn').fadeOut();
    }
  });



});