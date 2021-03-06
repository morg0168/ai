jQuery(document).ready(function($) {

  'use strict';

  if ($(window).width() > 768) {
    skrollrStart();
    onscreenStart();
    skrollr.get().refresh();
    $('.o-button').addClass('-loaded');
    $('.c-header_main_logo_link').addClass('-loaded');
    $('.c-nav_main_item').addClass('-loaded');
    $('.c-header_img_contain').addClass('-loaded');
  } else {
    $('.c-home_img_wrap').addClass('mobile');
    $('.c-next-section').addClass('mobile');
    $('.js-parallax').addClass('mobile');
    $('.c-home_header').addClass('mobile');

    $('.o-button').addClass('-loaded');
    $('.c-header_main_logo_link').addClass('-loaded');
    $('.c-nav_main_item').addClass('-loaded');
    $('.c-header_img_contain').addClass('-loaded');
  }

  //scroll to top when top button clicked
  $('.c-header_scrolltop').click(function() {
    $('html,body').animate({
      scrollTop: 0
    }, 'slow');
  });

  $('#js-toggle_menu, .c-nav_main_list li a').click(function() {
    toggleNav();
  });

  function toggleNav() {
    if ($(window).width() < 768) {
      var el = $('#js-nav');
      var button = $('#js-toggle_menu');
      if (!el.hasClass('menu_is_loaded')) {
        el.addClass('menu_is_loaded');
        button.addClass('menu_is_loaded');
      } else {
        el.removeClass('menu_is_loaded');
        button.removeClass('menu_is_loaded');
      }
    }
  }

  if ($(window).width() < 768) {
    $('.c-header').removeClass('c-header_static').addClass('c-header_scrolled');
  }
  //open contact modal
  $('.c-main_right_contact, .footer-contact, .contact').click(function() {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    } else {
      $(this).addClass('active');
      $('.modal-wrap, .mb-contain').addClass('visible').removeClass('hidden');
      $('body').addClass('-modal-open');
    }
  });
  //close contact modal
  $('.close-button').click(function() {
    $('.c-main_right_contact').removeClass('active');
    $('.modal-wrap, .mb-contain').addClass('hidden').removeClass('visible')
    $('body').removeClass('-modal-open');
  });

  //download pdf, JPEG + PDF need to be uploaded on same date!
  $('.codes-list-item a').click(function() {
    var rawDataFile = $(this).attr('data-target');
    // // hope the server sets Content-Disposition: attachment!
    $(this).attr("href", rawDataFile);
  });

  //stop page reload if on current page
  var links = document.querySelectorAll('a[href]');
  var cbk = function(e) {
    if (e.currentTarget.href === window.location.href) {
      e.preventDefault();
      e.stopPropagation();
    }
  };
  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', cbk);
  }

  //skrollr start
  function skrollrStart() {
    var _skrollr = skrollr.get();
    if (_skrollr) {
      _skrollr.refresh();
    } else {
      skrollr.init({
        forceHeight: false,
        smoothScrolling: true,
        mobileDeceleration: 0.004,
        constants: {
          startanchor: function() {
            var width = screen.width;
            var startAnchor;
            startAnchor = 100;
            return startAnchor;
          }
        }
      });
    }
  }
  //onscreen start
  function onscreenStart() {
    $('section').onScreen({
      container: window,
      direction: 'vertical',
      doIn: function() {
        // Do something to the matched elements as they come in
      },
      doOut: function() {
        // Do something to the matched elements as they get off scren
      },
      tolerance: 0,
      throttle: 80,
      toggleClass: 'in-vp',
      lazyAttr: null,
      debug: false
    });
  }

  //Switch header look and feel when scrolled
  var header = $('.c-header');
  $(window).scroll(function() {
    if ($(window).width() > 768) {
      var scroll = $(window).scrollTop();
      if (scroll >= 50) {
        header.removeClass('c-header_static').addClass('c-header_scrolled');
      } else {
        //header.removeClass('c-header_scrolled').addClass('c-header_static');
      }
    }
  });
  (function() {
    $('.bc-inner.codes #section-002').closest('body').find('#section-001').remove();
    if ($(window).width() > 768) {
      skrollr.get().refresh();
    }
  })();
});
