/*

Template:  Work House - Industry Base HTML Template
Author: vibesweb.com
Design and Developed by: vibesweb.com

NOTE:

*/


/*================================================
[  Table of contents  ]
================================================




======================================
[ End table content ]
======================================*/
//POTENZA var


 (function($){
  "use strict";
  var POTENZA = {};

  /*************************
  Predefined Variables
*************************/
var $window = $(window),
    $document = $(document),
    $body = $('body'),
    $counter = $('.counter');

    //Check if function exists
    $.fn.exists = function () {
        return this.length > 0;
    };


/*************************
        Preloader
*************************/
  POTENZA.preloader = function () {
       $("#load").fadeOut();
       $('#pre-loader').delay(0).fadeOut('slow');
   };

  /*************************
       owl carousel
*************************/
    POTENZA.carousel = function () {
      var owlslider = jQuery("div.owl-carousel");

           owlslider.each(function () {
              var $this = $(this),
                  $items = ($this.data('items')) ? $this.data('items') : 1,
                  $loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
                  $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
                  $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
                  $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
                  $autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
                  $space = ($this.attr('data-space')) ? $this.data('space') : 30;

                  $(this).owlCarousel({
                      loop: $loop,
                      items: $items,
                      responsive: {
                        0:{items: $this.data('xx-items') ? $this.data('xx-items') : 1},
                        480:{items: $this.data('xs-items') ? $this.data('xs-items') : 1},
                        768:{items: $this.data('sm-items') ? $this.data('sm-items') : 2},
                        980:{items: $this.data('md-items') ? $this.data('md-items') : 3},
                        1200:{items: $items}
                      },
                      dots: $navdots,
                      autoHeight:$autohgt,
                      margin:$space,
                      nav: $navarrow,
                      navText:["<i class='fa fa-angle-left fa-2x'></i>","<i class='fa fa-angle-right fa-2x'></i>"],
                      autoplay: $autoplay,
                      autoplayHoverPause: true
                  });
           });

    }


 /*************************
       counter
*************************/
 POTENZA.counters = function () {
  var counter = jQuery(".counter");


        $counter.each(function () {
         var $elem = $(this);
           $elem.appear(function () {
             $elem.find('.timer').countTo();
          });
        });


  };

/*************************
         Isotope
*************************/
POTENZA.Isotope = function () {

      var $isotope = $(".isotope"),
          $itemElement = '.grid-item',
          $filters = $('.isotope-filters');
        if ($isotope.exists()) {
            $isotope.isotope({
            resizable: true,
            itemSelector: $itemElement,
              masonry: {
                gutterWidth: 10
              }
            });
       $filters.on( 'click', 'button', function() {
         var $val = $(this).attr('data-filter');
             $isotope.isotope({ filter: $val });
             $filters.find('.active').removeClass('active');
             $(this).addClass('active');
      });
    }

}

/*************************
     Back to top
*************************/
 POTENZA.goToTop = function () {
  var $goToTop = $('#back-to-top');
      $goToTop.hide();
        $window.scroll(function(){
          if ($window.scrollTop()>100) $goToTop.fadeIn();
          else $goToTop.fadeOut();
      });
    $goToTop.on("click", function () {
        $('body,html').animate({scrollTop:0},1000);
        return false;
    });
  }

/****************************************************
          javascript
****************************************************/
var _arr  = {};
  function loadScript(scriptName, callback) {
    if (!_arr[scriptName]) {
      _arr[scriptName] = true;
      var body    = document.getElementsByTagName('body')[0];
      var script    = document.createElement('script');
      script.type   = 'text/javascript';
      script.src    = scriptName;

      // then bind the event to the callback function
      // there are several events for cross browser compatibility
      // script.onreadystatechange = callback;
      script.onload = callback;

      // fire the loading
      body.appendChild(script);

    } else if (callback) {
      callback();
    }
  };

/****************************************************
     POTENZA Window load and functions
****************************************************/

  //Window load functions
    $window.load(function () {
          POTENZA.preloader(),
          POTENZA.Isotope();
    });

 //Document ready functions
    $document.ready(function () {
        POTENZA.goToTop(),
        POTENZA.counters(),
        POTENZA.carousel();
    });
})(jQuery);

