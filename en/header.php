<header>
	<?php
	if(!isset($header_bg_type))
		$header_bg_type = '';
	?>
	<?php if ( $header_bg_type == 'home' ) { ?>
		<div class="home_bg bg">
			<div id="carousel" class="carousel fade" data-ride="carousel" data-interval="5000">
			<!-- Carousel indicators -->
				<ol class="carousel-indicators">
	        <?php 
			    	echo '<li data-target="#carousel" data-slide-to="0" class="active"></li>';
			    	for( $i = 1; $i < count($header_bg); $i++ ) {
			    		echo '<li data-target="#carousel" data-slide-to="'.$i.'"></li>';
			    	}
			    ?>
		    </ol>
		    <!-- Carousel items -->
				<div class="carousel-inner">
	        <div class="item active">
			      <img src="<?php echo $header_bg[0]; ?>" alt="Chania">
			    </div>
			    <?php 
			    	for( $i = 1; $i < count($header_bg); $i++ ) {
			    		echo '<div class="item"><img src="'.$header_bg[$i].'" /></div>';
			    	}
			    ?>
		    </div>
	      <!-- Carousel nav -->
		    <a class="carousel-control left" href="#carousel" data-slide="prev"></a>
		    <a class="carousel-control right" href="#carousel" data-slide="next"></a>
		    <!-- scroll down -->
	      <span class="scroll-btn">
					<a href="#booking">
						<span class="mouse">
							<span></span>
						</span>
						<p>scroll</p>
					</a>
				</span>
		  </div>
		</div>
		<!-- center img -->
		<div class="center_img">
			<img width="100%" src="<?php echo HOME_CENTER_IMG; ?>" />
		</div>
	<?php } else { ?>
		<div class="bg" style="height: <?php echo $header_bg_height; ?>">
			<img class="bg_img" src=<?php echo $header_bg; ?> />
			<img class="m_bg_img" src=<?php echo $m_header_bg; ?> />
			<div class="center_img"></div>
		</div>
	<?php } ?>
	<div class="bg_top_white">
		<?php 
			$php_self = explode('/', $_SERVER['PHP_SELF']);
			$btn_language_tw = $php_self[2] == 'zh-tw' ? 'active' : '';
			$btn_language_en = $php_self[2] == 'en' ? 'active' : '';
		?>
		<button class="btn_booking" onclick="alert('立即訂房');"><?php echo BTN_BOOKING; ?></button>
		<div class="language">
			<a href="" class="<?php echo $btn_language_tw; ?>">繁中</a> / <a href="" class="<?php echo $btn_language_en; ?>">EN</a>
		</div>
	</div>
	<div class="bg_logo"><a href="index.php"><img src="<?php echo TOP_LOGO; ?>" /></a></div>
	<div id="btn_burger_menu" class="menu">
		<div id="nav-icon3">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		<div class="menu_text">MENU</div>
	</div>
	<div id="booking" class="booking">
		<!-- <div class='booking_date input-group date' id='booking_check_in'>
			<div class="booking_date_text"><?php echo CHECK_IN; ?></div>
      <input type='text' placeholder="<?php echo CHECK_IN; ?>" readonly />
      <span class="input-group-addon">
      	<img src="../public/images/btn_calendar_normal.svg" />
      </span>
	  </div>
		<div class='booking_date input-group date' id='booking_check_out'>
			<div class="booking_date_text"><?php echo CHECK_OUT; ?></div>
      <input type='text' placeholder="<?php echo CHECK_OUT; ?>" readonly />
      <span class="input-group-addon">
      	<img src="../public/images/btn_calendar_normal.svg" />
      </span>
	  </div>
		<div class="booking_room_qty">
			<select>
				<option disabled selected><?php echo ROOMS; ?></option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
		</div>
		<button class="btn_booking" onclick="alert('立即訂房');"><?php echo BTN_BOOKING; ?></button> -->
	</div>
	<div class="burger_menu">
		<div class="burger_menu_logo">
			<a href="index.php"><img src="<?php echo WHITE_LOGO; ?>" /></a>
		</div>
		<div class="box">
			<div class="row">
				<div class="btn_booking_row"><button class="btn_booking" onclick="alert('立即訂房');"><?php echo BTN_BOOKING; ?></button></div>
				<div><a href="about_us.php"><img src="<?php echo BURGUR_MENU_ICON_1; ?>" /><?php echo BURGUR_MENU_TEXT_1; ?></a></div>
				<div><a href="news.php"><img src="<?php echo BURGUR_MENU_ICON_2; ?>" /><?php echo BURGUR_MENU_TEXT_2; ?></a></div>
				<div><a href="rooms.php"><img src="<?php echo BURGUR_MENU_ICON_3; ?>" /><?php echo BURGUR_MENU_TEXT_3; ?></a></div>
				<div><a href="foods.php"><img src="<?php echo BURGUR_MENU_ICON_4; ?>" /><?php echo BURGUR_MENU_TEXT_4; ?></a></div>
			</div>
			<div class="row">
				<div><a href="spots.php"><img src="<?php echo BURGUR_MENU_ICON_5; ?>" /><?php echo BURGUR_MENU_TEXT_5; ?></a></div>
				<div><a href="location.php"><img src="<?php echo BURGUR_MENU_ICON_6; ?>" /><?php echo BURGUR_MENU_TEXT_6; ?></a></div>
				<div><a href="contact_us.php"><img src="<?php echo BURGUR_MENU_ICON_7; ?>" /><?php echo BURGUR_MENU_TEXT_7; ?></a></div>
				<div class="btn_pay_info" data-toggle="modal" data-target="#pay_info"><img src="<?php echo BURGUR_MENU_ICON_8; ?>" /><?php echo BURGUR_MENU_TEXT_8; ?></div>
			</div>
			<div class="row contact_info">
				<div class="language">
					<a href="" class="<?php echo $btn_language_tw; ?>">繁中</a> / <a href="" class="<?php echo $btn_language_en; ?>">EN</a>
				</div>
				<div class="email"><a href="mailto:<?php echo BOOKING_EMAIL; ?>"><img src="<?php echo BURGUR_MENU_ICON_9; ?>" /><?php echo BOOKING_EMAIL; ?></a></div>
				<div><a href="tel:<?php echo BOOKING_PHONE_NUMBER; ?>"><img src="<?php echo BURGUR_MENU_ICON_10; ?>" /><?php echo BOOKING_PHONE_NUMBER; ?></a></div>
				<div><a href="tel:<?php echo BOOKING_FAX_NUMBER; ?>"><img src="<?php echo BURGUR_MENU_ICON_11; ?>" /><?php echo BOOKING_FAX_NUMBER; ?></a></div>
				<div><a href="tel:<?php echo BOOKING_MOBILE_NUMBER; ?>"><img src="<?php echo BURGUR_MENU_ICON_12; ?>" /><?php echo BOOKING_MOBILE_NUMBER; ?></a></div>
				<div class="social_icon">
					<a href="<?php echo BURGUR_MENU_FB_LINK; ?>" target="_blank"><img src="<?php echo BURGUR_MENU_ICON_13; ?>" /></a>
					<a href="<?php echo BURGUR_MENU_YOUTUBE_LINK; ?>" target="_blank"><img src="<?php echo BURGUR_MENU_ICON_14; ?>" /></a></div>
			</div>
		</div>
	</div>
	<div id="pay_info" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content"> 
	      <div class="modal-body">
	        <img class="btn_close" src="<?php echo BTN_CLOSE_IMG; ?>" data-dismiss="modal" />
	        <div class="body">
	        	<div class="pay_info_1">
	        		<div class="title">
	        			<img src="<?php echo ROOMS_BTN_ATM; ?>">
	        			<?php echo ROOMS_PAY_INFO_TEXT_1; ?>	
	        		</div>
	        		<!-- 匯款資訊 1 -->
	        		<div>
	        			<div class="rows"><?php echo ROOMS_PAY_INFO_TEXT_3; ?><span><?php echo ROOMS_PAY_INFO_TEXT_8; ?></span></div>
		        		<div class="rows"><?php echo ROOMS_PAY_INFO_TEXT_4; ?><span><?php echo ROOMS_PAY_INFO_TEXT_9; ?></span></div>
		        		<div class="rows"><?php echo ROOMS_PAY_INFO_TEXT_6; ?><span><?php echo ROOMS_PAY_INFO_TEXT_10; ?></span></div>
		        		<div class="rows"><?php echo ROOMS_PAY_INFO_TEXT_7; ?><span><?php echo ROOMS_PAY_INFO_TEXT_11; ?></span></div>
	        		</div>
	        	</div>
	        	<div class="pay_info_2">
	        		<div class="title">
	        			<img src="<?php echo ROOMS_BTN_ATM; ?>">
	        			<?php echo ROOMS_PAY_INFO_TEXT_2; ?>	
	        		</div>
	        		<!-- 匯款資訊 2 -->
	        		<div>
	        			無
	        		</div>
	        	</div>
	        </div>
	        <div class="footer">
	        	<div class="rows"><?php echo ROOMS_PAY_INFO_TEXT_17; ?></div>
	        	<div class="rows booking_phone">
	        		<?php echo ROOMS_PAY_INFO_TEXT_18; ?><a href="tel:<?php echo BOOKING_PHONE_NUMBER; ?>"><?php echo ROOMS_PAY_INFO_TEXT_19; ?></a>
	        	</div>
	        	<a href="tel:<?php echo BOOKING_PHONE_NUMBER; ?>" class="rows btn_contact_us">
	        		<img src="<?php echo ROOMS_BTN_CONTACT_US; ?>" />
	        		<?php echo ROOMS_BTN_CONTACT_US_TEXT; ?>
	        	</a>
	        </div>
	      </div>
	    </div>
		</div>
	</div>
</header>