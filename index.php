<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
    include 'view/links.php';
  ?>

  <title>Group Project</title>

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

</head>

<body>

  <!-- Main Container -->


  <div class="container-full">

    <!-- Header  -->

    <div class="header">


      <!-- Top menu -->

      <div class="topHeadMenu">
        <div class="innerDiv">

          <!-- Top Left Menu -->

          <ul class="topLeftMenu">
            <a href="#">
              <li>Ana Səhifə</li>
            </a>
            <a href="#">
              <li>Azpress TV</li>
            </a>
            <a href="#">
              <li>Azpress Özəl</li>
            </a>
          </ul>

          <!-- Top Left Menu end -->

          <!-- Top Right Menu -->

          <ul class="topRightMenu">
            <a href="#">
              <li>Əlaqə</li>
            </a>
            <a href="#">
              <li>Saytda Reklam</li>
            </a>
          </ul>

          <!-- Top Right Menu end -->

        </div>
      </div>

      <!-- Top menu end -->

      <!-- Banner -->

      <div class="banner innerDiv">
        <div class="topLogo">
          <img src="img/logo.png">
        </div>
        <div class="backMap">
        </div>
        <div class="rightAdvertBox">
        </div>
      </div>

      <!-- Banner end -->


      <!-- Category Menu  -->

        <!-- Main Category -->

        <div class="mainCategoryMenu">

          <div class="innerDiv">


            <div class="mainMenuDiv">


              <nav class="dropDownMenu">
                <ul>

                  <li class="activeTab"><a href="#">SİYASƏT</a>
                    <ul>
                      <li><a href="#">Dövlətçilik</a></li>
                      <li><a href="#">Hakimiyyəti</a></li>
                      <li><a href="#">Partiya</a></li>
                      <li><a href="#">Tarix</a></li>
                      <li><a href="#">Xarici Əlaqələr</a></li>
                    </ul>
                  </li>
                  <li><a href="#">HÜQUQ</a>
                    <ul>
                      <li><a href="#">Sub Menu 1</a></li>
                      <li><a href="#">Sub Menu 2</a></li>
                      <li><a href="#">Sub Menu 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">İQTİSADİYYAT</a>
                    <ul>
                      <li class="dir"><a href="#">Sub Menu 1</a></li>
                      <li class="dir"><a href="#">Sub Menu 2</a>
                        <ul>
                          <li><a href="#">Category 1</a></li>
                          <li><a href="#">Category 2</a></li>
                          <li><a href="#">Category 3</a></li>
                          <li><a href="#">Category 4</a></li>
                          <li><a href="#">Category 5</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Sub Menu 3</a></li>
                      <li><a href="#">Sub Menu 4</a></li>
                      <li><a href="#">Sub Menu 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">REGİON</a></li>
                  <li><a href="#">CƏMİYYƏT</a></li>
                  <li><a href="#">İDMAN</a></li>
                  <li><a href="#">MƏDƏNİYYƏT</a></li>
                  <li><a href="#">ELM</a></li>
                  <li><a href="#">KİV</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>


        <!-- Main Category end -->

      <!-- Sub Category Menu -->

      <div class="subCategoryMenu">

        <div class="innerDiv">

          <div id="subCategoryMenu">

          </div>
        </div>
      </div>

      <!-- Sub Category Menu -->


      <!-- Category Menu end -->

    </div>

    <!-- Header end  -->

    <!-- General Content Page -->

    <div class="content">

      <div class="innerDiv">

        <!-- All content page -->

        <div class="allContent">

          <div class="row">

            <!-- Left Side Content Page -->

            <div class="col-md-8 mainContent">

              <!-- Main Slider  -->

              <div class="slider">

                <div id="jssor_1" class="jssor_1">

                  <!-- Loading Screen -->

                  <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('sliderImg/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                  </div>
                  <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 689px; height: 356px; overflow: hidden;">
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/1.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-1.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/2.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-2.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/3.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-3.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/4.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-4.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/5.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-5.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/6.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-6.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/7.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-7.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/8.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-8.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/9.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-9.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/10.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-10.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/11.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-11.jpg" />
                    </div>
                    <div data-p="144.50" style="display: none;">
                      <img data-u="image" src="sliderImg/12.jpg" />
                      <div class="sliderNewsBox">
                        <p>Test Text for slider, testing height and width. If there is any problem, it will be fixed soon. Please refer to your admin for any problem.</p>
                      </div>
                      <img data-u="thumb" src="sliderImg/thumb-12.jpg" />
                    </div>
                  </div>
                  <!-- Thumbnail Navigator -->
                  <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:689px;height:97px;" data-autocenter="1">
                    <!-- Thumbnail Item Begin -->
                    <div data-u="slides" style="cursor: default;">
                      <div data-u="prototype" class="p">
                        <div class="w">
                          <div data-u="thumbnailtemplate" class="t"></div>
                        </div>
                        <div class="c"></div>
                      </div>
                    </div>
                    <!-- Thumbnail Item end -->
                  </div>
                  <!-- Arrow Navigator -->
                  <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                  <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
                </div>

                <!-- Main Slider End -->

                <!-- run Slider -->

                    <script>
                      jssor_1_slider_init();
                    </script>

                <!-- run Slider end -->

              </div>

              <!-- Main Slider end  -->

              <!-- News Card Box of Category -->

              <div class="newsCardBox">

                <!-- Category Name -->

                  <h3>General</h3>

                <!-- Category Name end -->

                <!-- News Block -->

                <div class="newsBlock">

                  <!-- Big news box -->

                  <div class="bigBoxWrapper">

                    <!-- Big News Image -->

                    <div style="background-image: url('img/qedir.jpg');" class="bigImgDiv centerBackgroundImage">

                    </div>

                    <!-- Big News Image end-->

                    <!-- Big text div -->

                    <div class="bigTextDiv">
                      <span>
                        Capicola salami shank landjaeger. Alcatra pastrami drumstick, jowl tenderloin filet mignon beef
                      </span>
                    </div>

                    <!-- Big text div end -->

                    <!-- Big image news details -->

                    <div class="bigBoxLilTextDetails">
                      <span id="catrightSideLeftLilTextDetails">
                        25 Noyabr, 2015
                      </span>
                      <span id="catrightTextDetails">
                        <i class="fa fa-eye"> 45544</i>
                        <i class="fa fa-comments"> 5</i>
                      </span>
                    </div>

                    <!-- Big image news details end-->

                  </div>

                  <!-- Big news box -->

                  <div class="lilBoxWrapper">
                    <div class="lilnewsBox">
                      <div style="background-image: url('img/erdo.jpg');"class="lilImg centerBackgroundImage"></div>
                      <div class="lilText">
                        <span>
                          Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami corned beef
                        </span>
                      </div>
                    </div>
                    <div class="lilnewsBox">
                      <div style="background-image: url('img/erdo.jpg');" class="lilImg centerBackgroundImage">
                      </div>
                      <div class="lilText">
                        <span>
                          Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami
                        </span>
                      </div>
                    </div>
                    <div class="lilnewsBox">
                      <div style="background-image: url('img/erdo.jpg');" class="lilImg centerBackgroundImage"></div>
                      <div class="lilText">
                        <span>
                          Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami corned beef
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- News Block end -->

              </div>

          <!-- News Card Box of Category end -->

              <div class="newsCardBox">

                <h3>General</h3>

                <div class="newsBlock">
                  <div class="bigBoxWrapper">
                    <div class="bigImgDiv">
                      <img src="img/qedir.jpg" alt="">
                    </div>
                    <div class="bigTextDiv">
                      <span>
                        Capicola salami shank landjaeger. Alcatra pastrami drumstick, jowl tenderloin filet mignon beef
                      </span>
                    </div>
                    <div class="bigBoxLilTextDetails">
                      <span id="catrightSideLeftLilTextDetails">
                        25 Noyabr, 2015
                      </span>
                      <span id="catrightTextDetails">
                        <i class="fa fa-eye"> 45544 </i>
                        <i class="fa fa-comments"> 5</i>
                      </span>
                    </div>
                  </div>

                  <div class="lilBoxWrapper">
                    <div class="lilnewsBox">
                      <div style="background-image: url('img/terane.jpg');" class="lilImg centerBackgroundImage"></div>
                      <div class="lilText">
                        <span>
                          Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami corned beef
                        </span>
                      </div>
                    </div>
                    <div class="lilnewsBox">
                      <div style="background-image: url('img/terane.jpg');" class="lilImg centerBackgroundImage">
                      </div>
                      <div class="lilText">
                        <span>
                          Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami
                        </span>
                      </div>
                    </div>
                    <div class="lilnewsBox">
                      <div style="background-image: url('img/terane.jpg');" class="lilImg centerBackgroundImage">
                      </div>
                      <div class="lilText">
                        <span>
                          Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami corned beef
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Left Side Content Page end -->

            <!-- Right Side Content Page -->

            <?php
              include 'view/rightblock.php';
            ?>

            <!-- Right Side Content Page end -->


          </div>
          <div class="row">
            <div class="innerDiv">
            <div class="writerSlider">
            </div>
          </div>
        </div>


  <div class="row">

    <div class="col-md-8 mainContent">

  <!-- category box -->

      <div id="secondNewsCardBox" class="newsCardBox">
        <h3>General</h3>
        <div class="newsBlock">
          <div class="bigBoxWrapper">
            <div class="bigImgDiv">
              <img src="img/qedir.jpg" alt="">
            </div>
            <div class="bigTextDiv">
              <span>
                Capicola salami shank landjaeger. Alcatra pastrami drumstick, jowl tenderloin filet mignon beef
              </span>
            </div>
            <div class="bigBoxLilTextDetails">
              <span id="catrightSideLeftLilTextDetails">
                25 Noyabr, 2015
              </span>
              <span id="catrightTextDetails">
                <i class="fa fa-eye"> 45544 </i>
                <i class="fa fa-comments"> 5</i>
              </span>
            </div>
          </div>
          <div class="lilBoxWrapper">
            <div class="lilnewsBox">
              <div style="background-image: url('img/isid.jpg');" class="lilImg centerBackgroundImage"></div>
              <div class="lilText">
                <span>
                  Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami corned beef
                </span>
              </div>
            </div>
            <div class="lilnewsBox">
              <div style="background-image: url('img/isid.jpg');" class="lilImg centerBackgroundImage">
              </div>
              <div class="lilText">
                <span>
                  Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami
                </span>
              </div>
            </div>
            <div class="lilnewsBox">
              <div style="background-image: url('img/isid.jpg');" class="lilImg centerBackgroundImage">
              </div>
              <div class="lilText">
                <span>
                  Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami corned beef
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- category box end -->


<!-- news box of category -->

<div class="newsCardBox">
  <h3>General</h3>
  <div class="newsBlock">
    <div class="bigBoxWrapper">
      <div class="bigImgDiv">
        <img src="img/qedir.jpg" alt="">
      </div>
      <div class="bigTextDiv">
        <span>
          Capicola salami shank landjaeger. Alcatra pastrami drumstick, jowl tenderloin filet mignon beef
        </span>
      </div>
      <div class="bigBoxLilTextDetails">
        <span id="catrightSideLeftLilTextDetails">
          25 Noyabr, 2015
        </span>
        <span id="catrightTextDetails">
          <i class="fa fa-eye"> 45544 </i>
          <i class="fa fa-comments"> 5</i>
        </span>
      </div>
    </div>
    <div class="lilBoxWrapper">
      <div class="lilnewsBox">
        <div style="background-image: url('img/erdo.jpg');" class="lilImg centerBackgroundImage"></div>
        <div class="lilText">
          <span>
            Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami corned beef
          </span>
        </div>
      </div>
      <div class="lilnewsBox">
        <div style="background-image: url('img/erdo.jpg');" class="lilImg centerBackgroundImage"></div>
        <div class="lilText">
          <span>
            Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami
          </span>
        </div>
      </div>
      <div class="lilnewsBox">
        <div style="background-image: url('img/erdo.jpg');" class="lilImg centerBackgroundImage"></div>
        <div class="lilText">
          <span>
            Bresaola strip steak landjaeger, kevin pig swine rump boudin. Pork chop ham hock salami corned beef
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- news box of category -->

<!-- video slider -->

        <div style="width:100%; height:auto;" class="videoSlider">

            <h3>Video Gallery</h3>

              <div id="amazingcarousel-container-1">
                <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:720px;margin:0px auto 0px;">
                  <div class="amazingcarousel-list-container">
                    <ul class="amazingcarousel-list">
                      <li class="amazingcarousel-item">
                        <div class="amazingcarousel-item-container">
                          <div class="amazingcarousel-image">
                            <iframe width='162.5' height='122' src="https://www.youtube.com/embed/FyKWUTwSYAs?&theme=dark&autohide=2&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
                          </div>
                          <div class="amazingcarousel-title">Test title</div>
                          <div class="amazingcarousel-description">Test description</div>
                        </div>
                      </li>
                      <li class="amazingcarousel-item">
                        <div class="amazingcarousel-item-container">
                          <div class="amazingcarousel-image">
                            <iframe width='162.5' height='122' src="https://www.youtube.com/embed/FyKWUTwSYAs?&theme=dark&autohide=2&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
                          </div>
                          <div class="amazingcarousel-title">Test title</div>
                          <div class="amazingcarousel-description">Test description</div>
                        </div>
                      </li>
                      <li class="amazingcarousel-item">
                        <div class="amazingcarousel-item-container">
                          <div class="amazingcarousel-image">
                            <iframe width='162.5' height='122' src="https://www.youtube.com/embed/FyKWUTwSYAs?&theme=dark&autohide=2&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
                          </div>
                          <div class="amazingcarousel-title">Test title</div>
                          <div class="amazingcarousel-description">Test description</div>
                        </div>
                      </li>
                      <li class="amazingcarousel-item">
                        <div class="amazingcarousel-item-container">
                          <div class="amazingcarousel-image">
                            <iframe width='162.5' height='122' src="https://www.youtube.com/embed/FyKWUTwSYAs?&theme=dark&autohide=2&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
                          </div>
                          <div class="amazingcarousel-title">Test title</div>
                          <div class="amazingcarousel-description">Test description</div>
                        </div>
                      </li>
                      <li class="amazingcarousel-item">
                        <div class="amazingcarousel-item-container">
                          <div class="amazingcarousel-image">
                            <iframe width='162.5' height='122' src="https://www.youtube.com/embed/FyKWUTwSYAs?&theme=dark&autohide=2&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
                          </div>
                          <div class="amazingcarousel-title">Test title</div>
                          <div class="amazingcarousel-description">Test description</div>
                        </div>
                      </li>
                      <li class="amazingcarousel-item">
                        <div class="amazingcarousel-item-container">
                          <div class="amazingcarousel-image">
                            <iframe width='162.5' height='122' src="https://www.youtube.com/embed/FyKWUTwSYAs?&theme=dark&autohide=2&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
                          </div>
                          <div class="amazingcarousel-title">Test title</div>
                          <div class="amazingcarousel-description">Test description</div>
                        </div>
                      </li>
                      <li class="amazingcarousel-item">
                        <div class="amazingcarousel-item-container">
                          <div class="amazingcarousel-image">
                            <iframe width='162.5' height='122' src="https://www.youtube.com/embed/FyKWUTwSYAs?&theme=dark&autohide=2&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
                          </div>
                          <div class="amazingcarousel-title">Test title</div>
                          <div class="amazingcarousel-description">Test description</div>
                        </div>
                      </li>
                      <li class="amazingcarousel-item">
                        <div class="amazingcarousel-item-container">
                          <div class="amazingcarousel-image">
                            <iframe width='162.5' height='122' src="https://www.youtube.com/embed/FyKWUTwSYAs?&theme=dark&autohide=2&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
                          </div>
                          <div class="amazingcarousel-title">Test title</div>
                          <div class="amazingcarousel-description">Test description</div>
                        </div>
                      </li>
                    </ul>
                    <div class="amazingcarousel-prev"></div>
                    <div class="amazingcarousel-next"></div>
                  </div>
                  <div class="amazingcarousel-nav"></div>
                </div>
              </div>
            </div>

            <!-- video slider end-->

          </div>

          <!-- side content after writer slider -->
            <div class="col-md-4 sideContent"></div>
          <!-- side content after writer slider -->

          </div>

          <!-- Image Gallery -->

          <div class="row">
            <div class=" col-md-12">
              <?php
                include 'view/imagegallery.php';
              ?>
            </div>
          </div>

        <!-- Image Gallery end-->

        </div>

        <!-- All content page end-->

      </div>
    </div>

    <!-- General Content Page end-->

    <!-- Footer -->
    <?php
      include 'view/footer.php';
    ?>
    <!-- Footer end-->

  </div>

  <!-- Main Container end-->

</body>
</html>
