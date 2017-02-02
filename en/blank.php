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
			$m_header_bg = FOODS_TOP_BG;
			$header_bg = FOODS_M_TOP_BG;
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