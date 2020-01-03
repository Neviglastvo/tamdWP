"use strict";

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

$('.hamburger').on('click', function (e) {
  e.preventDefault();
  $('.hamburger').toggleClass('active');
  $('.js-nav-mobile').toggleClass('active');
});
$(function () {
  if ($(".js-nav-trigger").length) {
    var objectSelect = $(".js-nav-trigger");
    var scroll = $(window).scrollTop();
    var objectPosition = objectSelect.offset().top;

    if (scroll > objectPosition) {
      $(".header2").addClass("fixed");
    } else {
      $(".header2").removeClass("fixed");
    }

    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll > objectPosition) {
        $(".header2").addClass("fixed");
      } else {
        $(".header2").removeClass("fixed");
      }
    });
  }
});
heroSlider();
$(document).ready(function () {
  slider4items($('.js-slider-student-learn'));
  slider4items($('.js-slider-enrollees'));
  slider4items($('.js-slider-famous'));
  slider3items($('.js-slider-lectures'));
  newWhatIsMechanicsSlider();
  newEventsSlider();
  newNewsSlider(); // navSlider4item()

  navMobileLogic();
  $(window).trigger('resize'); // function setMinHeight() {
  //   let target = $('.js-same-height');
  //   var minHeight = 0;
  //   $(target).each(function () {
  //     var currentHeight = $(this).outerHeight();
  //     if (currentHeight > minHeight) {
  //       return minHeight = currentHeight;
  //     }
  //   });
  //   $(target).css('height', minHeight);
  // }

  $('.js-accordeon-action').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.js-accordeon-item').find('.js-accordeon-action').toggleClass('active');
    $(this).closest('.js-accordeon-item').find('.js-accordeon-action-trigger').slideToggle(600);
    $([document.documentElement, document.body]).animate({
      scrollTop: $(this).closest('.js-accordeon-item').offset().top
    }, 900);
  });

  if ($('.js-what-is-slider').length) {
    $('.js-what-is-slider').slick({
      rows: 0,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      autoplay: true,
      pauseOnFocus: true,
      prevArrow: "<i class='slider-arrow slider-arrow--prev fas fa-angle-left'></i>",
      nextArrow: "<i class='slider-arrow slider-arrow--next fas fa-angle-right'></i>",
      autoplaySpeed: 3000,
      responsive: [{
        breakpoint: 1470,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }, {
        breakpoint: 940,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  }

  function navSlider4item() {
    var thisSlider = element;
    var thisSliderArrows = thisSlider.next('.js-slider-control');

    if (thisSlider.length && thisSlider.not('.slick-initialized')) {
      thisSlider.slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        rows: 0,
        slidesToScroll: 1,
        appendArrows: thisSliderArrows,
        prevArrow: thisSliderArrows.find('.js-slider-control-prev'),
        nextArrow: thisSliderArrows.find('.js-slider-control-next'),
        responsive: [{
          breakpoint: 1171,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        }, {
          breakpoint: 869,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }, {
          breakpoint: 581,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }]
      });
    } else {
      thisSliderArrows.css('display', 'none');
    }
  }
});

function navMobileLogic() {
  var nav = $('mega-menu');
  var navItem = $('.mega-menu .mega-menu-item');
  var navItemLink = $('.mega-menu .mega-menu-item .mega-menu-link');
  var link = $('.mega-menu-link');
  var list = $('.mega-sub-menu');
  var sublistItem = $('.mega-menu-item');

  if (window.matchMedia('(max-width: 1120px)').matches) {
    navItemLink.on('click', function (event) {
      console.log("Sda");
      list.removeClass('active');
      $(this).next(list).toggleClass('active');
    });
  }
}

function heroSlider() {
  if ($('.js-main-hero-slider').length) {
    $('.js-main-hero-slider').slick({
      rows: 0,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      autoplay: true,
      draggable: false,
      pauseOnFocus: true,
      infinite: true,
      autoplaySpeed: 5000,
      prevArrow: "<i class='slider-arrow slider-arrow--prev fas fa-angle-left'></i>",
      nextArrow: "<i class='slider-arrow slider-arrow--next fas fa-angle-right'></i>"
    });
  }
}

function newEventsSlider() {
  if ($('.js-events-slider').length) {
    jQuery(function ($) {
      'use strict';

      (function () {
        var _ref;

        var frame = $('.js-events-slider');
        var slidee = frame.children('ul').eq(0);
        var wrap = frame.parent();
        var mySlySliderEvents = new Sly(frame, (_ref = {
          horizontal: 1,
          itemNav: 'basic',
          smart: 0,
          activateOn: 'click',
          mouseDragging: 1,
          touchDragging: 1,
          releaseSwing: 1,
          startAt: 0,
          scrollBar: wrap.find('.scrollbar'),
          scrollBy: 0,
          clickBar: true,
          dragHandle: true,
          dynamicHandle: true,
          speed: 300,
          elasticBounds: 1
        }, _defineProperty(_ref, "dragHandle", 1), _defineProperty(_ref, "dynamicHandle", 1), _ref)).init();
        $(window).on('resize', function () {
          frame.sly('reload');
        });
      })();
    });
  }
}

function newNewsSlider() {
  if ($('.js-news-slider').length) {
    jQuery(function ($) {
      'use strict';

      (function () {
        var _ref2;

        var frame = $('.js-news-slider');
        var slidee = frame.children('ul').eq(0);
        var wrap = frame.parent();
        var mySlySliderNews = new Sly(frame, (_ref2 = {
          horizontal: 1,
          itemNav: 'basic',
          smart: 0,
          activateOn: 'click',
          mouseDragging: 1,
          touchDragging: 1,
          releaseSwing: 1,
          startAt: 6,
          scrollBar: wrap.find('.scrollbar'),
          scrollBy: 0,
          clickBar: true,
          dragHandle: true,
          dynamicHandle: true,
          speed: 300,
          elasticBounds: 1
        }, _defineProperty(_ref2, "dragHandle", 1), _defineProperty(_ref2, "dynamicHandle", 1), _ref2)).init();
        $(window).on('resize', function () {
          frame.sly('reload');
        });
      })();
    });
  }
}

function slider4items(element) {
  var thisSlider = element;
  var thisSliderArrows = thisSlider.next('.js-slider-control');

  if (thisSlider.length && thisSlider.not('.slick-initialized')) {
    thisSlider.slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      rows: 0,
      slidesToScroll: 1,
      appendArrows: thisSliderArrows,
      prevArrow: thisSliderArrows.find('.js-slider-control-prev'),
      nextArrow: thisSliderArrows.find('.js-slider-control-next'),
      responsive: [{
        breakpoint: 1171,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      }, {
        breakpoint: 869,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }, {
        breakpoint: 581,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  } else {
    thisSliderArrows.css('display', 'none');
  }
}

function slider3items(element) {
  var thisSlider = element;
  var thisSliderArrows = thisSlider.next('.js-slider-control');
  var slidesmustShow = 3;
  var sliderLenght = element.length;

  if (thisSlider.length && thisSlider.not('.slick-initialized')) {
    thisSlider.slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      rows: 0,
      slidesToScroll: 1,
      appendArrows: thisSliderArrows,
      prevArrow: thisSliderArrows.find('.js-slider-control-prev'),
      nextArrow: thisSliderArrows.find('.js-slider-control-next'),
      responsive: [{
        breakpoint: 1081,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }, {
        breakpoint: 741,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  } else {
    thisSliderArrows.css('display', 'none');
  }
}

function newWhatIsMechanicsSlider() {
  var thisSlider = $('.js-slider-what-is-mechanics');
  var thisSliderArrows = thisSlider.next('.js-slider-control');

  if (thisSlider.length && thisSlider.not('.slick-initialized')) {
    thisSlider.slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      rows: 0,
      slidesToScroll: 1,
      appendArrows: thisSliderArrows,
      prevArrow: thisSliderArrows.find('.js-slider-control-prev'),
      nextArrow: thisSliderArrows.find('.js-slider-control-next'),
      responsive: [{
        breakpoint: 1171,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }, {
        breakpoint: 869,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  } else {
    thisSliderArrows.css('display', 'none');
  }
}