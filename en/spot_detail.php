<!DOCTYPE html>
<html>
	<?php include 'define.php'; ?>
	<!-- head -->
	<?php 
		$title = SPOTS_WEB_TITLE; 
		include 'head.php'; 
	?>

	<body>

		<!-- header -->
		<?php 
			$m_header_bg = SPOTS_M_TOP_BG;
			$header_bg = SPOTS_TOP_BG;
			$header_bg_height = '300px';
			include 'header.php';
		?>

		<!-- body -->
		<main>
			<div class="spot_detail">
				<!-- main title -->
				<?php
					$main_title = SPOTS_MAIN_TITLE;
					include 'main_title.php';
				?>
				<!-- container -->
				<?php
					include 'spots_json.php';
					$i = ($_GET['id']-1);
					$spot_name = $array_spots[$i]['name'];
					$spot_picture = $array_spots[$i]['hd_img'];
					$spot_content = $array_spots[$i]['content'];
					$spot_google_map = $array_spots[$i]['google_map'];
					$spot_info_address = $array_spots[$i]['address'];
					$spot_info_phone = $array_spots[$i]['phone'];
					$spot_info_opening = $array_spots[$i]['opening'];
				?>
				<div class="container">
					<div class="flex">
						<div class="spot_name"><?php echo $spot_name; ?></div>
						<div class="btn_back"><a href="<?php echo SPOT_DETAIL_BTN_BACK_PATH; ?>"><?php echo SPOT_DETAIL_TEXT_BTN_BACK; ?></a></div>
					</div>
					<div class="spot_picture"><img width="100%" src="<?php echo $spot_picture; ?>" /></div>
					<div class="spot_content"><?php echo $spot_content; ?></div>
					<div class="map">
						<div class="google_map">
							<?php echo $spot_google_map; ?>
						</div>
						<div class="spot_info">
							<div><?php echo SPOT_DETAIL_TEXT_1; ?></div>
							<div><?php echo SPOT_DETAIL_TEXT_2; ?> : <?php echo $spot_info_address; ?></div>
							<div><?php echo SPOT_DETAIL_TEXT_3; ?> : <?php echo $spot_info_phone; ?></div>
							<div><?php echo SPOT_DETAIL_TEXT_4; ?> : <?php echo $spot_info_opening; ?></div>
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