<!DOCTYPE html>
<html>
	<?php include 'define.php'; ?>
	<!-- head -->
	<?php 
		$title = NEWS_WEB_TITLE; 
		include 'head.php'; 
	?>

	<body>

		<!-- header -->
		<?php 
			$m_header_bg = NEWS_M_TOP_BG;
			$header_bg = NEWS_TOP_BG;
			$header_bg_height = '300px';
			include 'header.php';
		?>

		<!-- body -->
		<main>
			<div class="news">
				<!-- main title -->
				<?php
					$main_title = NEWS_MAIN_TITLE;
					include 'main_title.php';
				?>
				<!-- container -->
				<div class="container">
					<div class="row type1">
				  	<div class="news_media">
				  		<?php echo NEWS_ROW_VIDEO; ?>
				  	</div>
				  	<div class="news_bg">
				  		<div class="news_title_icon"><img width="30px" src="<?php echo NEWS_ROW_TITLE_ICON; ?>" /></div>
					  	<div class="news_title"><?php echo NEWS_ROW_TITLE_1; ?></div>
					  	<div class="news_text"><?php echo NEWS_ROW_TEXT_1; ?></div>
					  	<div class="news_date">2016-11-11</div>
					  	<div class="news_arrow"><img src="<?php echo NEWS_ROW_ARROW_ICON; ?>"></div>
				  	</div>
				  </div>
				  <div class="row type2">
				  	<div class="news_media">
				  		<img src="<?php echo NEWS_ROW_IMG; ?>" />
				  	</div>
				  	<div class="news_bg">
				  		<div class="news_title_icon"><img width="30px" src="<?php echo NEWS_ROW_TITLE_ICON; ?>" /></div>
					  	<div class="news_title"><?php echo NEWS_ROW_TITLE_1; ?></div>
					  	<div class="news_text"><?php echo NEWS_ROW_TEXT_1; ?></div>
					  	<div class="news_date">2016-11-11</div>
					  	<div class="news_arrow"><img src="<?php echo NEWS_ROW_ARROW_ICON; ?>"></div>
				  	</div>
				  </div>
				  <div class="row type1">
				  	<div class="news_media">
				  		<a href="a.pdf" target="_blank">
				  			<img src="<?php echo NEWS_ROW_IMG; ?>" />
				  		</a>
				  	</div>
				  	<div class="news_bg">
					  	<div class="news_title_icon"><img width="30px" src="<?php echo NEWS_ROW_TITLE_ICON; ?>" /></div>
					  	<div class="news_title"><?php echo NEWS_ROW_TITLE_1; ?></div>
					  	<div class="news_text"><?php echo NEWS_ROW_TEXT_1; ?></div>
					  	<div class="news_date">2016-11-11</div>
					  	<div class="news_arrow"><img src="<?php echo NEWS_ROW_ARROW_ICON; ?>"></div>
				  	</div>
				  </div>
				  <!-- pagination -->
				  <div class="row pagination">
				  	<a class="active">1</a>
				  	<a>2</a>
				  	<a>3</a>
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