jQuery(function () {

  // owl
  jQuery(".owlGaleria").owlCarousel({
    loop: true,
    margin: 15,
    nav: false,
    autoHeight: true,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    responsive: {
      0: {
        items: 1,
        dots: false
      },
      600: {
        items: 2,
        dots: false
      },
      1000: {
        items: 4
      }
    }
  });
  jQuery(".owlPets").owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    autoHeight: true,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    responsive: {
      0: {
        items: 1,
        dots: false
      },
      600: {
        items: 1,
        dots: false
      },
      1000: {
        items: 2
      }
    }
  });

  jQuery(".owlDpos").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoHeight: true,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    responsive: {
      0: {
        items: 1,
        dots: false
      },
      600: {
        items: 1,
        dots: false
      },
      1000: {
        items: 1
      }
    }
  });


  // tabs
  jQuery('ul.tabs li').click(function () {
    var tab_id = jQuery(this).attr('data-tab');

    jQuery('ul.tabs li').removeClass('current');
    jQuery('.tab-content').removeClass('current').hide();;

    jQuery(this).addClass('current');
    jQuery("#" + tab_id).addClass('current').fadeIn(300);
  })

  // smooth scroll

  if (window.location.hash) {
    jQuery('#fale-conosco').addClass('fixHeightHash');
    jQuery('#nossas-lojas').addClass('fixPaddingtHash');
  } else {
    jQuery('#fale-conosco').removeClass('fixHeightHash');
    jQuery('#nossas-lojas').removeClass('fixPaddingtHash');
  }

  jQuery('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top - 160
        }, 600);
        return false;
      }
    }
  });
});

// header on scroll
jQuery(function () {
  var header = jQuery("#header");
  var filterNav = jQuery(".filterNav");
  jQuery(window).scroll(function () {
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 20) {
      header.addClass("headerStick");
    } else {
      header.removeClass("headerStick");
    }
    if (scroll >= 478) {
      filterNav.addClass("filterNavStick");
    } else {
      filterNav.removeClass("filterNavStick");
    }
  });
});

// aos
AOS.init({
  easing: 'ease-out-back',
  duration: 800,
  once: false,
  mirror: true,
});
// parallax 
new universalParallax().init({
  speed: 4
});

// // form
// // jQuery plugin to prevent double submission of forms
// jQuery.fn.preventDoubleSubmission = function () {
//   jQuery(this).on('submit', function (e) {
//     var $form = jQuery(this);
//     jQuery('#preloader').fadeIn(100).css('display', 'flex');
//     if ($form.data('submitted') === true) {
//       // Previously submitted - don't submit again
//       e.preventDefault();
//     } else {
//       // Mark it so that the next submit can be ignored
//       $form.data('submitted', true);
//     }
//   });
//   // Keep chainability
//   return this;
// };

// jQuery('.wpcf7-form').preventDoubleSubmission();

// document.addEventListener('wpcf7submit', function (event) {
//   console.log(1);
//   setTimeout(function () {
//     jQuery('#preloader').fadeOut(100);
//   }, 2000);
// }, false);

jQuery(function () {
  // maks
  jQuery('.date').mask('00/00/0000');
  jQuery('.time').mask('00:00');
  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
    spOptions = {
      onKeyPress: function (val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };
  jQuery('.phone').mask(SPMaskBehavior, spOptions);

  // //upload
  // jQuery('#your-file').on('change', function (e) {
  //   var fileName = e.target.files[0].name;
  //   jQuery('.custom-file-label').html(fileName);
  //   console.log(fileName);
  // });


});