<!DOCTYPE html>
<html>
	<?php include 'define.php'; ?>
	<!-- head -->
	<?php 
		$title = HOME_WEB_TITLE; 
		include 'head.php'; 
	?>

	<body>

		<!-- header -->
		<?php 
			$header_bg_type = HOME_MAIN_TITLE;
			// $m_header_bg = array( FOODS_M_TOP_BG, ABOUT_US_M_TOP_BG, NEWS_M_TOP_BG );
			$header_bg = array( '../public/images/home/Banners_01.jpg', '../public/images/home/Banners_02.jpg', '../public/images/home/Banners_03.jpg', '../public/images/home/Banners_04.jpg', '../public/images/home/Banners_05.jpg' );
			$header_bg_height = '650px';
			include 'header.php';
		?>

		<!-- body -->
		<main>
			<div class="home">
				<!-- container -->
				<div class="container">
					<div class="row topic">
						<div><?php echo HOME_TOPIC_TITLE; ?></div>
						<div><?php echo HOME_TOPIC_TEXT_1; ?></div>
						<div><?php echo HOME_TOPIC_TEXT_2; ?></div>
						<div><?php echo HOME_TOPIC_TEXT_3; ?></div>
						<div><img src="<?php echo HOME_TOPIC_IMG; ?>" /></div>
					</div>
					<div class="row photo">
						<div><img src="<?php echo HOME_PHOTO_1; ?>" /></div>
						<div>
							<div style="margin-right: 10px;"><img src="<?php echo HOME_PHOTO_2; ?>" /></div>
							<div>
								<div><img src="<?php echo HOME_PHOTO_3; ?>" /></div>
								<div style="margin-top: 10px;"><img src="<?php echo HOME_PHOTO_4; ?>" /></div>
							</div>
						</div>
					</div>
					<div class="row">
						<a class="btn_more" href="about_us"><?php echo COMMON_TEXT_1; ?></a>
					</div>
				</div>
			</div>
			<div class="home">
				<div class="container-fluid">
					<div class="news">
						<h3>
							<?php
								$main_title = NEWS_MAIN_TITLE;
								include 'main_title.php';
							?>
						</h3>
						<div class="news_list">
							<div class="news_row">
								<div><img src="<?php echo NEWS_ROW_TITLE_ICON; ?>" /></div>
								<div class="title">浪漫台三線計劃-推展慢食、漫遊、慢活的休閒產業</div>
								<div class="date">2016/04/18</div>
							</div>
							<div class="news_row">
								<div><img src="<?php echo NEWS_ROW_TITLE_ICON; ?>" /></div>
								<div class="title">浪漫台三線計劃-推展慢食、漫遊、慢活的休閒產業</div>
								<div class="date">2016/04/18</div>
							</div>
							<div class="news_row">
								<div><img src="<?php echo NEWS_ROW_TITLE_ICON; ?>" /></div>
								<div class="title">浪漫台三線計劃-推展慢食、漫遊、慢活的休閒產業</div>
								<div class="date">2016/04/18</div>
							</div>
						</div>
						<div class="btn_row">
							<a class="btn_more" href="news"><?php echo COMMON_TEXT_3; ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="home">
				<div class="container">
					<div class="row spots">
						<h3><?php echo HOME_TEXT_1; ?></h3>
						<div class="spots">
							<div class="spot">
								<img src="<?php echo HOME_SPOT_IMG_1; ?>" />
								<div class="name"><?php echo HOME_SPOT_NAME_1; ?></div>
								<a href="spots" class="more"><?php echo SPOTS_TEXT_MORE; ?></a>
							</div>
							<div class="spot">
								<img src="<?php echo HOME_SPOT_IMG_2; ?>" />
								<div class="name"><?php echo HOME_SPOT_NAME_2; ?></div>
								<a href="spots" class="more"><?php echo SPOTS_TEXT_MORE; ?></a>
							</div>
							<div class="spot">
								<img src="<?php echo HOME_SPOT_IMG_3; ?>" />
								<div class="name"><?php echo HOME_SPOT_NAME_3; ?></div>
								<a href="spots" class="more"><?php echo SPOTS_TEXT_MORE; ?></a>
							</div>
						</div>
						<a class="btn_more" href="spots"><?php echo COMMON_TEXT_2; ?></a>
					</div>
				</div>
			</div>
		</main>

		<!-- footer -->
		<?php include 'footer.php'; ?>

		<!-- custom javascript -->
    <script type="text/javascript">
			$(function(){
				$('#carousel').carousel(1);

				//home bg auto height
				if( document.documentElement.clientWidth >= 768 ) {
					$('header .center_img').height( (document.documentElement.clientHeight-35) + 'px');
					$('header .home_bg').height( (document.documentElement.clientHeight-35) + 'px');
				}
			})
    </script>
	</body>
</html>