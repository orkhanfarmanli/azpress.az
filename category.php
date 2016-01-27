<!DOCTYPE html>
<html>

<head>

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

							<div class="categoryHighlightsBox col-sm-12">

								<!-- Category Highlights big boxes -->

								<div class="catHighBigBoxWrapper">
									<a href="#">
										<div class="catHighBigBox">
											<div style="background: url(imgGallery/tumb8.jpg); background-size:cover; background-position:center" class="catHighBigImgBox"></div>
											<div class="catHighBigBoxNewsText">
												<span>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna SDGSDG. Ut enim XVCSDFad WQEFEWDSV SDGSGA
												</span>
											</div>
										</div>
									</a>
								</div>

								<!-- Category Highlights big boxes end -->


								<!-- Category Highlights little boxes -->

								<div class="catHighLilBoxWrapper">

									<div class="catHighLilBox">
										<a href="#">
											<div style="background: url(imgGallery/tumb1.jpg); background-size:cover; background-position:center" class="catHighLilImgBox"></div>
											<div class="catHighLilBoxNewsText">
												<span>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													</span>
											</div>
										</a>
									</div>

									<div class="catHighLilBox">
										<a href="#">
											<div style="background: url(imgGallery/tumb3.jpg); background-size:cover; background-position:center" class="catHighLilImgBox"></div>
											<div class="catHighLilBoxNewsText">
												<span>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													</span>
											</div>
										</a>
									</div>

									<div class="catHighLilBox">
										<a href="#">
											<div style="background: url(imgGallery/tumb5.jpg); background-size:cover; background-position:center" class="catHighLilImgBox"></div>
											<div class="catHighLilBoxNewsText">
												<span>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													</span>
											</div>
										</a>
									</div>

									<div class="catHighLilBox">
										<a href="#">
											<div style="background: url(imgGallery/tumb3.jpg); background-size:cover; background-position:center" class="catHighLilImgBox"></div>
											<div class="catHighLilBoxNewsText">
												<span>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													</span>
											</div>
										</a>
									</div>

								</div>

								<!-- Category Highlights little boxes end -->

							</div>
						</div>
					</div>




					<div class="row">

						<!-- Left Side Content Page -->

						<div class="categoryBoxWrapper col-md-8">

							<div class="catSubBoxesWrapper">

<!-- news card box -->

								<div class="catNews col-md-6">
									<div class="catNewsBoxWrapper">
										<a href="#">
											<div style="background: url(imgGallery/tumb3.jpg); background-size:cover; background-position:center" class="catNewsImg"></div>
												<div class="catNewsDesc">
													<span>
														Just a news text Just a news text Just a news text Just a news text Just a news text Just a news text
													</span>
												</div>
											</a>
									</div>
								</div>

	<!-- news card box end -->

								<div class="catNews col-md-6">
									<div class="catNewsBoxWrapper">
										<a href="#">
											<div style="background: url(imgGallery/tumb3.jpg); background-size:cover; background-position:center" class="catNewsImg"></div>
												<div class="catNewsDesc">
													<span>
														Just a news text Just a news text Just a news text Just a news text Just a news text Just a news text
													</span>
												</div>
											</a>
									</div>
								</div>

								<div class="catNews col-md-6">
									<div class="catNewsBoxWrapper">
										<a href="#">
											<div style="background: url(imgGallery/tumb3.jpg); background-size:cover; background-position:center" class="catNewsImg"></div>
												<div class="catNewsDesc">
													<span>
														Just a news text Just a news text Just a news text Just a news text Just a news text Just a news text
													</span>
												</div>
											</a>
									</div>
								</div>

								<div class="catNews col-md-6">
									<div class="catNewsBoxWrapper">
										<a href="#">
											<div style="background: url(imgGallery/tumb3.jpg); background-size:cover; background-position:center" class="catNewsImg"></div>
												<div class="catNewsDesc">
													<span>
														Just a news text Just a news text Just a news text Just a news text Just a news text Just a news text
													</span>
												</div>
											</a>
									</div>
								</div>





							</div>



						</div>

						<!-- Left Side Content Page end -->

						<!-- Right Side Content Page -->

						<?php
	              include 'view/rightBlock.php';
        	    ?>

							<!-- Right Side Content Page end -->


					</div>



					<div class="row">

						<div class="col-md-8 mainContent">


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
