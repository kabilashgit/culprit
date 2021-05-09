import $ from 'jquery';

window.$ = window.jQuery = $;
require('popper.js');
require('bootstrap');
require('owl.carousel.es6');
require('@fancyapps/fancybox');
require('./fxss-rate-iconfont')
require('./rating-star.min');



$(function () {

  $('nav #lens-icon').on('click', function () {
    $('nav .search-wrapper').toggleClass('open');
  });

  $('.filter-box .filter-box--header #filterToggle, .filter-box .filter-box--filters #filterToggleClose').on('click', function () {
    $('.filter-box .filter-box--filters').toggleClass('filter-open');

    if (window.innerWidth <= 991) {
      if ($('.filter-box .filter-box--filters').hasClass('filter-open')) {
        $('html').addClass('no-scroll');
      } else {
        $('html').removeClass('no-scroll');
      }
    }
  });

  $('.clear-all-btn').on('click', function (){
    $('.filter-box .filter-box--filters input:checkbox, .filter-box .filter-box--filters input:radio').prop('checked', false);
  });

  if ($('.product-details-section').length) {
    let ratingStar = $('.customer-reviews #rateBox');
    ratingStar.rate({
      length: 5,
      // half: 0,
      // decimal: 0,
      // hover: true,
      textList: ["Very Bad", "Bad", "Ok", "Good", "Very Good"],
      value: parseFloat(ratingStar.attr('data-value')),
      readonly: (ratingStar.attr('data-readonly') === 'true'),
      size: '24px',
      selectClass: 'fxss_rate_select',
      incompleteClass: 'fxss_rate_no_all_select',
      customClass: 'custom_class',
      callback: function (object) {
        // console.log(object.index)
      }
    });
  }


});

$(window).on('load', function () {

  $('.home-banner .owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: false,
    mouseDrag: true,
    touchDrag: true
  });

  $('.home-offers .owl-carousel').owlCarousel({
    items: 3,
    loop: false,
    margin: 25,
    dots: true,
    nav: false,
    navText: ['<i class="icon-locker"></i>', '<i class="icon-locker"></i>'],
    autoplay: false,
    mouseDrag: true,
    touchDrag: true,
    responsive: {
      0: {
        items: 1
      },
      789: {
        items: 2,
        nav: true
      },
      1199: {
        items: 3,
        nav: true
      }
    }
  });

  $('.home-testimonial .owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: false,
    mouseDrag: true,
    touchDrag: true
  });

  $('.product-details-section .similar-products .owl-carousel').owlCarousel({
    items: 3,
    loop: false,
    margin: 25,
    dots: true,
    nav: false,
    navText: ['<i class="icon-locker"></i>', '<i class="icon-locker"></i>'],
    autoplay: false,
    mouseDrag: true,
    touchDrag: true,
    responsive: {
      0: {
        items: 2
      },
      789: {
        items: 2,
      },
      1199: {
        items: 5,
      }
    }
  });

  $('.product-details-section .owl-carousel#productGallery').owlCarousel({
    items: 2,
    loop: false,
    margin: 15,
    autoplay: false,
    mouseDrag: true,
    touchDrag: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
      },
      789: {
        items: 2,
        nav: true,
        dots: false,
      }
    }
  });

  $('.product-details-section [data-fancybox="productDetailsGallery"]').fancybox({
    hash: false,
    buttons: [
      // "zoom",
      //"share",
      "slideShow",
      // "fullScreen",
      // "download",
      "thumbs",
      "close"
    ],
    protect: true,
    preventCaptionOverlap: true,
    thumbs   : {
      autoStart : true
    },
  });
});

