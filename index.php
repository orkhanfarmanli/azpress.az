<!DOCTYPE html>
<html>
<head>

<!-- fuck this ssh thing  -->


<!-- source links -->

  <?php
    include 'view/links.php';
  ?>

<!-- source links end -->

  <title>azpress.az</title>



</head>

<body>

  <!-- Main Container -->


  <div class="container-full">

    <!-- Header  -->

    <?php

    include 'view/header.php';

    ?>

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

              <?php

              include 'view/mainSlider.php';

              ?>

              <!-- Main Slider end  -->

              <!-- news box of category -->

              <?php
                include 'view/newsCardBox.php';
              ?>

              <!-- news box of category -->

              <!-- news box of category end -->

              <?php
                include 'view/newsCardBox.php';
              ?>

              <!-- news box of category end -->

            </div>

            <!-- Left Side Content Page end -->

            <!-- Right Side Content Page -->

            <?php
              include 'view/rightBlock.php';
            ?>

            <!-- Right Side Content Page end -->


          </div>

          <!-- Writer Slider -->


        <div class="row">
          <div class="innerDiv">

              <?php
                include 'view/writerSlider.php';
              ?>

          </div>
        </div>

        <!-- Writer Slider end -->


  <div class="row">

    <div class="col-md-8 mainContent">

        <!-- second row category box -->

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

        <!-- second row category box end -->


      <!-- news box of category -->

      <?php
        include 'view/newsCardBox.php';
      ?>

      <!-- news box of category -->

      <!-- video slider -->

        <?php
          include 'view/videoSlider.php';
        ?>

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
                include 'view/imageGallery.php';
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
