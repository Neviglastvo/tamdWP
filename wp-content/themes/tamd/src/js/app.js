
$('.hamburger').on('click', function(e) {
  e.preventDefault();
  $('.hamburger').toggleClass('active');
  $('.js-nav-mobile').toggleClass('active');
});

$(function() {

  if ($(".js-nav-trigger").length) {
    var objectSelect = $(".js-nav-trigger");
    var scroll = $(window).scrollTop();
    var objectPosition = objectSelect.offset().top;
    if (scroll > objectPosition) {
      $(".header2").addClass("fixed");
    } else {
      $(".header2").removeClass("fixed");
    }

    $(window).scroll(function() {
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
$(document).ready(function() {
  slider4items($('.js-slider-student-learn'));
  slider4items($('.js-slider-enrollees'));
  slider4items($('.js-slider-famous'));
  slider3items($('.js-slider-lectures'));
  newWhatIsMechanicsSlider();
  newEventsSlider();
  newNewsSlider();
  // navSlider4item()

  navMobileLogic()
  $(window).trigger('resize');
  // function setMinHeight() {

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

  $('.js-accordeon-action').on('click', function(e) {
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
      responsive: [
      {
        breakpoint: 1470,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 940,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
      ]
    });
  }

  function navSlider4item() {

    let thisSlider = element;
    let thisSliderArrows = thisSlider.next('.js-slider-control');

    if(thisSlider.length && thisSlider.not('.slick-initialized')) {
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
        responsive: [
        {
          breakpoint: 1171,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 869,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 581,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        ]
      });
    }else {
      thisSliderArrows.css('display', 'none');
    }
  }




});


function navMobileLogic() {
  let nav = $('mega-menu');
  let navItem = $('.mega-menu .mega-menu-item');
  let navItemLink = $('.mega-menu .mega-menu-item .mega-menu-link');
  let link = $('.mega-menu-link');
  let list = $('.mega-sub-menu');
  let sublistItem = $('.mega-menu-item');
  if (window.matchMedia('(max-width: 1120px)').matches) {

    navItemLink.on('click', function(event) {
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
      nextArrow: "<i class='slider-arrow slider-arrow--next fas fa-angle-right'></i>",
    });
  }

}
function newEventsSlider() {

  if ($('.js-events-slider').length) {

    jQuery(function($) {
      'use strict';

      (function() {
        let frame  = $('.js-events-slider');
        let slidee = frame.children('ul').eq(0);
        let wrap   = frame.parent();

        var mySlySliderEvents = new Sly(frame, {
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
          clickBar:      true,
          dragHandle:    true,
          dynamicHandle: true,
          speed: 300,
          elasticBounds: 1,
          dragHandle: 1,
          dynamicHandle: 1,
        }).init();

        $(window).on('resize', function() {
          frame.sly('reload');
        });

      }());
    });
  }

}

function newNewsSlider() {

  if ($('.js-news-slider').length) {

    jQuery(function($) {
      'use strict';

      (function() {
        let frame  = $('.js-news-slider');
        let slidee = frame.children('ul').eq(0);
        let wrap   = frame.parent();

        var mySlySliderNews = new Sly(frame, {
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
          clickBar:      true,
          dragHandle:    true,
          dynamicHandle: true,
          speed: 300,
          elasticBounds: 1,
          dragHandle: 1,
          dynamicHandle: 1,
        }).init();

        $(window).on('resize', function() {
          frame.sly('reload');
        });

      }());
    });
  }
}

function slider4items(element) {

  let thisSlider = element;
  let thisSliderArrows = thisSlider.next('.js-slider-control');

  if(thisSlider.length && thisSlider.not('.slick-initialized')) {
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
      responsive: [
      {
        breakpoint: 1171,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 869,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 581,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      ]
    });
  }else {
    thisSliderArrows.css('display', 'none');
  }
}

function slider3items(element) {

  let thisSlider = element;
  let thisSliderArrows = thisSlider.next('.js-slider-control');

  let slidesmustShow = 3;
  let slidesCount = $('.js-slider-reviews .js-slider-reviews-item');

  let sliderLenght = slidesCount.length;

  if( thisSlider.length && sliderLenght > 3) {
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
      responsive: [
      {
        breakpoint: 1081,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 741,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      ]
    });
  }else {
    thisSliderArrows.css('display', 'none');
  }
}

function newWhatIsMechanicsSlider() {

  let thisSlider = $('.js-slider-what-is-mechanics');
  let thisSliderArrows = thisSlider.next('.js-slider-control');

  if(thisSlider.length && thisSlider.not('.slick-initialized')) {
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
      responsive: [
      {
        breakpoint: 1171,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 869,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      ]
    });
  }else {
    thisSliderArrows.css('display', 'none');
  }
}

