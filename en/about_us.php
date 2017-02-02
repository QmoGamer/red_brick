<!DOCTYPE html>
<html>
	<?php include 'define.php'; ?>
	<!-- head -->
	<?php 
		$title = ABOUT_US_WEB_TITLE; 
		include 'head.php'; 
	?>

	<body>

		<!-- header -->
		<?php 
			$m_header_bg = ABOUT_US_M_TOP_BG;
			$header_bg = ABOUT_US_TOP_BG;
			$header_bg_height = '300px';
			include 'header.php';
		?>

		<!-- body -->
		<main>
			<div class="about_us">
				<!-- main title -->
				<?php
					$main_title = ABOUT_US_MAIN_TITLE;
					include 'main_title.php';
				?>
				<!-- container -->
				<div class="container">
				  <div class="row top">	
				  	<div class="col-md-4" style="text-align: center;"><img width="150px" height="150px" src="<?php echo LOGO; ?>" /></div>
				  	<div class="col-md-8"><?php echo ABOUT_US_TEXT_1; ?></div>
				  </div>
				  <div class="row intro type1">
				  	<div class="intro_img"><img src="<?php echo ABOUT_US_INTRO_IMG_1; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo ABOUT_US_INTRO_TITLE_1; ?></div>
					  	<div class="intro_text"><?php echo ABOUT_US_INTRO_TEXT_1; ?></div>
				  	</div>
				  </div>
				  <div class="row intro type2">
				  	<div class="intro_img"><img src="<?php echo ABOUT_US_INTRO_IMG_2; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo ABOUT_US_INTRO_TITLE_2; ?></div>
					  	<div class="intro_text"><?php echo ABOUT_US_INTRO_TEXT_2; ?></div>
				  	</div>
				  </div>
				  <div class="row intro type1">
				  	<div class="intro_img"><img src="<?php echo ABOUT_US_INTRO_IMG_3; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo ABOUT_US_INTRO_TITLE_3; ?></div>
					  	<div class="intro_text"><?php echo ABOUT_US_INTRO_TEXT_3; ?></div>
				  	</div>
				  </div>
				  <div class="row intro type2">
				  	<div class="intro_img"><img src="<?php echo ABOUT_US_INTRO_IMG_4; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo ABOUT_US_INTRO_TITLE_4; ?></div>
					  	<div class="intro_text"><?php echo ABOUT_US_INTRO_TEXT_4; ?></div>
				  	</div>
				  </div>
				  <div class="row"><h3><?php echo ABOUT_US_TEXT_2; ?></h3></div>
				</div>
			</div>
			<!-- photo gallery -->
			<div class="about_us">
				<div class="container-fluid">
					<div id="gallery" class="row gallery carousel slide" data-ride="carousel" data-interval="5000">
						<ol class="carousel-indicators">
					    <li data-target="#gallery" data-slide-to="0" class="active"></li>
					    <li data-target="#gallery" data-slide-to="1"></li>
					    <li data-target="#gallery" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					    	<div>
						    	<div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_1; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_1; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_2; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_2; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_3; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_3; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_4; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_4; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_5; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_5; ?>" /></div>
							  	</div>
							  	<div>
							      <div><img src="<?php echo ABOUT_US_GALLERY_IMG_6; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_6; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_7; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_7; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_8; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_8; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_9; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_9; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_10; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_10; ?>" /></div>
							  	</div>
							  </div>
					    </div>
					    <div class="item">
					    	<div>
						      <div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_11; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_11; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_12; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_12; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_13; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_13; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_14; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_14; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_15; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_15; ?>" /></div>
							  	</div>
							  	<div>
							      <div><img src="<?php echo ABOUT_US_GALLERY_IMG_16; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_16; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_17; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_17; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_18; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_18; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_19; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_19; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_20; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_20; ?>" /></div>
							  	</div>
							  </div>
					    </div>
					    <div class="item">
					    	<div>
						      <div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_21; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_21; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_22; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_22; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_23; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_23; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_24; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_24; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_25; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_25; ?>" /></div>
							  	</div>
							  	<div>
							      <div><img src="<?php echo ABOUT_US_GALLERY_IMG_26; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_26; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_27; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_27; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_28; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_28; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_29; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_29; ?>" /></div>
						    		<div><img src="<?php echo ABOUT_US_GALLERY_IMG_30; ?>" data-toggle="lightbox" data-gallery="gallery-images" data-remote="<?php echo ABOUT_US_HD_GALLERY_IMG_30; ?>" /></div>
							  	</div>
						    </div>
					    </div>
					  </div>
					</div>
				  <div class="row">
				  	<a class="btn_panorama" href="<?php echo ABOUT_US_BTN_PANORAMA_LINK; ?>" target="_blank">
				  		<img src="<?php echo ABOUT_US_BTN_PANORAMA_IMG; ?>" />
				  		<?php echo ABOUT_US_BTN_PANORAMA; ?>
				  	</a>
				  </div>
			  </div>
			</div>
		</main>

		<!-- footer -->
		<?php include 'footer.php'; ?>

		<!-- custom javascript -->
		<script type="text/javascript" src="../public/dist/ekko-lightbox.min.js"></script>
		<script>
			$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		    event.preventDefault();
		    $(this).ekkoLightbox({always_show_close: true});
			});

			// polyfill
			// window.requestAnimationFrame = (function(){
			//   return  window.requestAnimationFrame       ||
			//           window.webkitRequestAnimationFrame ||
			//           window.mozRequestAnimationFrame    ||
			//           function( callback ){
			//             window.setTimeout(callback, 1000 / 60);
			//           };
			// })();

			// var speed = 5000;
			// (function currencySlide(){
			//     var currencyPairWidth = $('.slideItem:first-child').outerWidth();
			//     $(".slideContainer").animate({marginLeft:-currencyPairWidth},speed, 'linear', function(){
			//                 $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
			//         });
			//         requestAnimationFrame(currencySlide);
			// })();
		</script>
	</body>
</html>