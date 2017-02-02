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
			<div class="spots">
				<!-- main title -->
				<?php
					$main_title = SPOTS_MAIN_TITLE;
					include 'main_title.php';
				?>
				<!-- container -->
				<?php 
					include 'spots_json.php';
				?>
				<div class="container">
					<div class="row flex">
						<?php
							for( $i = 0; $i < count($array_spots); $i++ ) {
								echo '<div class="spot">
												<img src="'.$array_spots[$i]['img'].'" />
												<div class="title">'.$array_spots[$i]['name'].'</div>
												<div class="text">'.$array_spots[$i]['content'].'</div>
												<div class="more"><a href="spot_detail.php?id='.$array_spots[$i]['id'].'">'.SPOTS_TEXT_MORE.'</a></div>
											</div>';
							}
						?>
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