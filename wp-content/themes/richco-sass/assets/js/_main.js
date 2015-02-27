/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

 (function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      $('.carousel').carousel('pause');

      var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
      $fluidEl = $("figure");
      $allVideos.each(function() {
      $(this)
      // jQuery .data does not work on object/embed elements
      .attr('data-aspectRatio', this.height / this.width)
      .removeAttr('height')
      .removeAttr('width');
      });
      $(window).resize(function() {
      var newWidth = $fluidEl.width();
      $allVideos.each(function() {
      var $el = $(this);
      $el
      .width(newWidth)
      .height(newWidth * $el.attr('data-aspectRatio'));
      });
      }).resize();
      
      $('#flexiselDemo7').flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 1
          },
          tablet: {
            changePoint: 768,
            visibleItems: 3
          },
          tablet_hd: {
            changePoint: 985,
            visibleItems: 3
          },
          desktop: {
            changePoint: 5000,
            visibleItems: 5
          }
        }
      });

      $('a.product-gallery').colorbox({
        rel       : 'gal',
        scrolling : false,
        opacity   : 0.6
      });

      $(".youtube_gallery_item a").colorbox({iframe:true, innerWidth:640, innerHeight:370});

      $( "ul.dropdown-menu" ).hover(
        function() {
          $( this ).parent( ".dropdown" ).addClass( "hover" );
        }, function() {
          $( this ).parent( ".dropdown" ).removeClass( "hover" );
        }
      );


    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      $("#flexiselDemo2").flexisel({
        autoPlay: false,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 1
          },
          tablet: {
            changePoint: 768,
            visibleItems: 3
          },
          desktop: {
            changePoint: 5000,
            visibleItems: 3
          }
        }
      });

      $("#flexiselDemo3").flexisel({
        autoPlay: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 1
          },
          tablet: {
            changePoint: 768,
            visibleItems: 3
          },
          tablet_large: {
            changePoint: 985,
            visibleItems: 3
          },
          desktop: {
            changePoint: 5000,
            visibleItems: 5
          }
        }
      });

    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  },

  richco_around_the_world: {
    init: function() {
      // JavaScript to be fired on the richco arround the world page
      
      $('img[usemap]').rwdImageMaps(); //Resposive image area maps intialize

      // $('area').hover(
      //   function() {
      //     $( this ).append("<span> ***</span>");
      //   }, function() {
      //     $( this ).find( "span:last" ).remove();
      //   }
      // );

      //$("map area").tooltips();


      var x;
      var y;
      var thisTitle;
      var thisContent;
      $("area").hover(function(e){
          thisID = $(this).attr("id");
          thisTitle = $(this).attr("data-title");
          thisContent = $(this).attr("data-content");
          var position = $(this).attr('coords').split(',');
          x = +position[0] - position[2];
          y = +position[1] - position[2]*0.125;
          if ($(".info").length !== 0) {
              $(".info").fadeOut(500).animate({top: y+'px'}, {queue: false, duration:500}).queue(function(){
                  $(this).remove();
              });
          }
          $("#world-map-coordinates").append("<div class='info' id='info-"+thisID+"' style='width:"+position[2]*2+"px; left:"+x+"px;top:"+y+"px;'><div class='infoText'><h4>"+thisTitle+"</h4><p>"+thisContent+"</p></div></div>");
          $("#info-"+thisID).fadeIn(500).animate({top: y+20+'px'}, {queue: false, duration:500});
      },
      function() {
          $("#info-"+thisID).fadeOut(500).animate({top: y+'px'}, {queue: false, duration:500}).queue(function(){
              $(this).remove();
          });
      });

      $('.region-select').on('click', function() {

        if ( $(this).attr('rel') === 'us' ) {

          $('.lg-world-map').hide();
          $('.slider-container').hide();
          $('.slider-us').show();
          $('.region-select').removeClass('active');
          $('.region-us').addClass('active');

          if (typeof us === "undefined") {
            us = $('#bxslider-us').bxSlider({
              pager: false,
              captions: true

            });
          }else{
            us.reloadSlider();
          }
          
         // window.location.hash = '#end';
        }else if ( $(this).attr('rel') === 'uk' ) {

          $('.lg-world-map').hide();
          $('.slider-container').hide();
          $('.slider-uk').show();
          $('.region-select').removeClass('active');
          $('.region-uk').addClass('active');

          if (typeof uk === "undefined") {
            uk = $('#bxslider-uk').bxSlider({
              pager: false,
              captions: true

            });
          }else{
            uk.reloadSlider();
          }
          
        }else if ( $(this).attr('rel') === 'au' ) {

          $('.lg-world-map').hide();
          $('.slider-container').hide();
          $('.slider-au').show();
          $('.region-select').removeClass('active');
          $('.region-au').addClass('active');

          if (typeof au === "undefined") {
            au = $('#bxslider-au').bxSlider({
              pager: false,
              captions: true

            });
          }else{
            au.reloadSlider();
          }
          
        }

      });
  
      $('area').on('click', function() {
        //alert($(this).attr('alt') + ' clicked');
        if ( $(this).attr('alt') === 'us' ) {

          $('.lg-world-map').hide();
          $('.slider-us').show();
          $('.region-select').removeClass('active');
          $('.region-us').addClass('active');

          if (typeof us === "undefined") {
            us = $('#bxslider-us').bxSlider({
              pager: false,
              captions: true

            });
          }else{
            us.reloadSlider();
          }
          
         // window.location.hash = '#end';
        }else if ( $(this).attr('alt') === 'uk' ) {

          $('.lg-world-map').hide();
          $('.slider-uk').show();
          $('.region-select').removeClass('active');
          $('.region-uk').addClass('active');

          if (typeof uk === "undefined") {
            uk = $('#bxslider-uk').bxSlider({
              pager: false,
              captions: true

            });
          }else{
            uk.reloadSlider();
          }
          
        }else if ( $(this).attr('alt') === 'au' ) {

          $('.lg-world-map').hide();
          $('.slider-au').show();
          $('.region-select').removeClass('active');
          $('.region-au').addClass('active');

          if (typeof au === "undefined") {
            au = $('#bxslider-au').bxSlider({
              pager: false,
              captions: true

            });
          }else{
            au.reloadSlider();
          }
          
        }

      });

      $('.close-slider').on('click', function() {
        $('.slider-container').hide();
        $('.lg-world-map').show();
        $('.region-select').removeClass('active');
      });

      //$(window).on('hashchange', function(event) { });

    }
  }

};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

