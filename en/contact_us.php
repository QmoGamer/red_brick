<!DOCTYPE html>
<html>
	<?php include 'define.php'; ?>
	<!-- head -->
	<?php 
		$title = CONTACT_US_WEB_TITLE; 
		include 'head.php'; 
	?>

	<body>

		<!-- header -->
		<?php 
			$m_header_bg = CONTACT_US_M_TOP_BG;
			$header_bg = CONTACT_US_TOP_BG;
			$header_bg_height = '300px';
			include 'header.php';
		?>

		<!-- body -->
		<main>
			<div class="contact_us">
				<!-- main title -->
				<?php
					$main_title = CONTACT_US_MAIN_TITLE;
					include 'main_title.php';
				?>
				<!-- container -->
				<div class="container">
					<div class="row contact_form">
						<div class="form_tip"><?php echo CONTACT_US_TEXT_6; ?></div>
						<form>
							<div class="form-group flex type_1">
								<div>
									<input type="text" name="" class="form-control" placeholder="<?php echo CONTACT_US_TEXT_8; ?>" />
								</div>
								<div>
									<input type="text" name="" class="form-control" placeholder="<?php echo CONTACT_US_TEXT_9; ?>" />
								</div>
							</div>
							<div class="form-group flex type_1">
								<div>
									<input type="text" name="" class="form-control" placeholder="<?php echo CONTACT_US_TEXT_10; ?>" />
								</div>
								<div>
									<input type="text" name="" class="form-control" placeholder="<?php echo CONTACT_US_TEXT_11; ?>" />
								</div>
							</div>
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="<?php echo CONTACT_US_TEXT_12; ?>" />
							</div>
							<div class="form-group">
								<textarea rows="10" class="form-control" placeholder="<?php echo CONTACT_US_TEXT_13; ?>"></textarea>
							</div>
							<div class="form-group flex type_2">
								<div class="captcha">
									<img width="120px" height="50px" src="http://placehold.it/120x50" />	
									<img width="50px" height="50px" src="<?php echo CONTACT_US_BTN_REFRESH; ?>" class="btn_refresh" />
								</div>
								<div>
									<input type="text" name="" class="form-control input_captcha" placeholder="<?php echo CONTACT_US_TEXT_14; ?>" />							
								</div>
								<button class="btn_submit"><?php echo CONTACT_US_TEXT_15; ?></button>
							</div>
						</form>
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