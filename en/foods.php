<!DOCTYPE html>
<html>
	<?php include 'define.php'; ?>
	<!-- head -->
	<?php 
		$title = FOODS_WEB_TITLE; 
		include 'head.php'; 
	?>

	<body>

		<!-- header -->
		<?php 
			$m_header_bg = FOODS_M_TOP_BG;
			$header_bg = FOODS_TOP_BG;
			$header_bg_height = '300px';
			include 'header.php';
		?>

		<!-- body -->
		<main>
			<div class="foods">
				<!-- main title -->
				<?php
					$main_title = FOODS_MAIN_TITLE;
					include 'main_title.php';
				?>
				<!-- container -->
				<div class="container">
					<div class="row intro type1">
				  	<div class="intro_img"><img src="<?php echo FOODS_IMG_1; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo FOODS_TITLE_1; ?></div>
					  	<div class="intro_text"><?php echo FOODS_TEXT_1; ?></div>
				  	</div>
				  </div>
				  <div class="row intro type2">
				  	<div class="intro_img"><img src="<?php echo FOODS_IMG_2; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo FOODS_TITLE_2; ?></div>
					  	<div class="intro_text"><?php echo FOODS_TEXT_2; ?></div>
				  	</div>
				  </div>
				  <div class="row intro type1">
				  	<div class="intro_img"><img src="<?php echo FOODS_IMG_3; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo FOODS_TITLE_3; ?></div>
					  	<div class="intro_text"><?php echo FOODS_TEXT_3; ?></div>
				  	</div>
				  </div>
				  <div class="row intro type2">
				  	<div class="intro_img"><img src="<?php echo FOODS_IMG_4; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo FOODS_TITLE_4; ?></div>
					  	<div class="intro_text"><?php echo FOODS_TEXT_4 ?></div>
				  	</div>
				  </div>
				  <div class="row intro type1">
				  	<div class="intro_img"><img src="<?php echo FOODS_IMG_5; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo FOODS_TITLE_5; ?></div>
					  	<div class="intro_text"><?php echo FOODS_TEXT_5; ?></div>
				  	</div>
				  </div>
				  <div class="row intro type2">
				  	<div class="intro_img"><img src="<?php echo FOODS_IMG_6; ?>"></div>
				  	<div class="intro_bg">
					  	<div class="intro_title"><?php echo FOODS_TITLE_6; ?></div>
					  	<div class="intro_text"><?php echo FOODS_TEXT_6 ?></div>
				  	</div>
				  </div>
				</div>
			</div>
		</main>

		<!-- footer -->
		<?php include 'footer.php'; ?>

		<!-- custom javascript -->
		<script>
			
		</script>
	</body>
</html>