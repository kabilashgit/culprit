import $ from 'jquery';

window.$ = window.jQuery = $;
require('popper.js');
require('bootstrap');
require('owl.carousel.es6');
require('@fancyapps/fancybox');


$(function () {

  $('nav #lens-icon').on('click', function () {
    $('nav .search-wrapper').toggleClass('open');
  });

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

});
