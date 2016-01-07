
  <!-- Main Slider style -->

  <style>

    /* jssor slider arrow navigator skin 05 css */
    /*
      .jssora05l                  (normal)
      .jssora05r                  (normal)
      .jssora05l:hover            (normal mouseover)
      .jssora05r:hover            (normal mouseover)
      .jssora05l.jssora05ldn      (mousedown)
      .jssora05r.jssora05rdn      (mousedown)
      */

    .jssora05l,
    .jssora05r {
      display: block;
      position: absolute;
      /* size of arrow element */
      width: 40px;
      height: 40px;
      cursor: pointer;
      background: url('sliderImg/a17.png') no-repeat;
      overflow: hidden;
    }

    .jssora05l {
      background-position: -10px -40px;
    }

    .jssora05r {
      background-position: -70px -40px;
    }

    .jssora05l:hover {
      background-position: -130px -40px;
    }

    .jssora05r:hover {
      background-position: -190px -40px;
    }

    .jssora05l.jssora05ldn {
      background-position: -250px -40px;
    }

    .jssora05r.jssora05rdn {
      background-position: -310px -40px;
    }
  </style>


  <!-- Main Slider style end-->

  <!-- Main Slider script -->

  <script>

    jssor_1_slider_init = function() {

      var jssor_1_SlideshowTransitions = [{
        $Duration: 1200,
        x: 0.3,
        $During: {
          $Left: [0.3, 0.7]
        },
        $Easing: {
          $Left: $Jease$.$InCubic,
          $Opacity: $Jease$.$Linear
        },
        $Opacity: 2
      }];

      var jssor_1_options = {
        $AutoPlay: true,
        $SlideshowOptions: {
          $Class: $JssorSlideshowRunner$,
          $Transitions: jssor_1_SlideshowTransitions,
          $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
          $Class: $JssorThumbnailNavigator$,
          $Cols: 10,
          $SpacingX: 18,
          $SpacingY: 8,
          $Align: 470
        }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

      function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
          refSize = Math.min(refSize, 689);
          jssor_1_slider.$ScaleWidth(refSize);
        } else {
          window.setTimeout(ScaleSlider, 30);
        }
      }
      $Jssor$.$AddEvent(window, "load", ScaleSlider);
      $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
      $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    };

  </script>

  <!-- Main Slider script end -->
