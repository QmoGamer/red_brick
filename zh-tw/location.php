<!DOCTYPE html>
<html>
	<?php include 'define.php'; ?>
	<!-- head -->
	<?php 
		$title = LOCATION_WEB_TITLE; 
		include 'head.php'; 
	?>

	<body>

		<!-- header -->
		<?php 
			$m_header_bg = LOCATION_M_TOP_BG;
			$header_bg = LOCATION_TOP_BG;
			$header_bg_height = '300px';
			include 'header.php';
		?>

		<!-- body -->
		<main>
			<div class="location">
				<!-- main title -->
				<?php
					$main_title = LOCATION_MAIN_TITLE;
					include 'main_title.php';
				?>
				<!-- container -->
				<div class="container">
					<div class="row">
						<div class="row_address">
							<a href="<?php echo LOCATION_GOOGLE_ADDRESS; ?>" target="_blank">
								<img src="../public/images/icon_adress_normal.svg" />
								<div><?php echo LOCATION_TEXT_1; ?></div>
							</a>
							<div class="desktop_map_icon" data-toggle="lightbox" data-remote="<?php echo LOCATION_MAP; ?>">
								<img src="../public/images/btn_map_normal.svg" />
								<div><?php echo LOCATION_TEXT_2; ?></div>
							</div>
						</div>
						<div class="google_map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.105037326297!2d120.99551885107564!3d24.58557098410662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346851f28e6b5c29%3A0x9a1e624041096ae6!2z57SF56Oa5bGL54m56Imy5rCR5a6_!5e0!3m2!1szh-TW!2stw!4v1479377790547" width="960" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div 
							data-toggle="lightbox" 
							data-remote="<?php echo LOCATION_MAP; ?>"
							class="mobile_map_icon">
							<img src="../public/images/btn_map_normal.svg" />
							<div><?php echo LOCATION_TEXT_2; ?></div>
						</div>
					</div>
					<div class="row way">
						<div class="title"><?php echo LOCATION_TITLE_1; ?></div>
						<div class="way_bg">
							<div class="way_title_bg">
								<div><?php echo LOCATION_WAY_TITLE_1; ?></div>
								<div><?php echo LOCATION_WAY_SUB_TITLE_1; ?></div>
							</div>
							<div class="way_text_bg">
								<?php echo LOCATION_WAY_TEXT_1; ?>
							</div>
						</div>
						<div class="way_bg">
							<div class="way_title_bg">
								<div><?php echo LOCATION_WAY_TITLE_2; ?></div>
								<div><?php echo LOCATION_WAY_SUB_TITLE_2; ?></div>
							</div>
							<div class="way_text_bg">
								<?php echo LOCATION_WAY_TEXT_2; ?>
							</div>
						</div>
						<div class="way_bg">
							<div class="way_title_bg desktop">
								<div><?php echo LOCATION_WAY_TITLE_3; ?></div>
								<div><?php echo LOCATION_WAY_SUB_TITLE_3; ?></div>
							</div>
							<div class="way_title_bg mobile">
								<div><?php echo LOCATION_WAY_TITLE_3; ?><?php echo LOCATION_WAY_SUB_TITLE_3; ?></div>
							</div>
							<div class="way_text_bg">
								<?php echo LOCATION_WAY_TEXT_3; ?>
							</div>
						</div>
					</div>
					<div class="row way">
						<div class="title"><?php echo LOCATION_TITLE_2; ?></div>
						<div class="way_bg">
							<div class="way_title_bg">
								<div><?php echo LOCATION_WAY_TITLE_4; ?></div>
								<div><?php echo LOCATION_WAY_SUB_TITLE_4; ?></div>
							</div>
							<div class="way_text_bg special">
								<?php echo LOCATION_WAY_TEXT_4; ?>
								<div>
									<a href="#" target="_blank"><img src="<?php echo LOCATION_WAY_IMG_1; ?>" /></a>
									<a href="#" target="_blank"><img src="<?php echo LOCATION_WAY_IMG_2; ?>" /></a>
								</div>
							</div>
						</div>
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
		</script>
	</body>
</html>