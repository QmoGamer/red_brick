<!DOCTYPE html>
<html>
	<?php include 'define.php'; ?>
	<!-- head -->
	<?php 
		$title = ROOMS_WEB_TITLE; 
		include 'head.php'; 
	?>

	<body>

		<!-- header -->
		<?php 
			$m_header_bg = ROOMS_M_TOP_BG;
			$header_bg = ROOMS_TOP_BG;
			$header_bg_height = '300px';
			include 'header.php';
		?>

		<!-- body -->
		<main>
			<div class="rooms">
				<!-- main title -->
				<?php
					$main_title = ROOMS_MAIN_TITLE;
					include 'main_title.php';
				?>
				<!-- container -->
				<div class="container">
					<div class="topic">
						<div class="topic_pic"><img width="100%" src="<?php echo ROOMS_TOPIC_PIC; ?>" /></div>
						<div class="topic_bg">
							<div class="topic_title"><?php echo ROOMS_TOPIC_TITLE; ?></div>
							<div class="topic_text"><?php echo ROOMS_TOPIC_TEXT; ?></div>
							<a class="btn_booking" href="#" target="_blank"><?php echo BTN_BOOKING; ?></a>
						</div>
					</div>
					<div class="plan">
						<h2><?php echo ROOMS_TEXT_1; ?></h2>
						<!-- plan 1 -->
						<div class="plan_row type_1 plan_1">
							<div class="plan_map_bg">
								<div class="plan_map_title"><?php echo ROOMS_TEXT_4; ?></div>
								<div class="plan_map" style="background-image: url('<?php echo ROOMS_PLAN_1; ?>')">
									<img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO_ACTIVE; ?>" 
										class="plan_map_spot spot_1 active" 
										data-plan="plan_1"
										data-spot="spot_1"
									/>
									<!-- <img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO; ?>" 
										class="plan_map_spot spot_2" 
										data-plan="plan_1"
										data-spot="spot_2"
									/> -->
									<img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO; ?>" 
										class="plan_map_spot spot_3" 
										data-plan="plan_1"
										data-spot="spot_3"
									/>
									<img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO; ?>" 
										class="plan_map_spot spot_4" 
										data-plan="plan_1"
										data-spot="spot_4"
									/>
								</div>
							</div>
							<div class="plan_imgs_bg">
								<div class="plan_imgs_title_bg">
									<img width="30px" height="30px" src="<?php echo ROOMS_BTN_PHOTO_ACTIVE; ?>" />
									<span class="plan_imgs_title"><?php echo ROOMS_PLAN_1_SPOT_1_TEXT; ?></span>
								</div>
				        <div class="plan_imgs_cover">
				        	<img src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_1; ?>">
				        </div>
						    <div class="thumbcarousel">
									<img 
                  	src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_1; ?>" 
                  	data-toggle="lightbox" 
                  	class="img-fluid" 
									  data-gallery="gallery-plan-1"
									  data-remote="<?php echo ROOMS_PLAN_1_SPOT_1_HD_IMG_1; ?>"
								  />
                  <img 
                  	src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_2; ?>" 
                  	data-toggle="lightbox" 
                  	class="img-fluid" 
									  data-gallery="gallery-plan-1"
									  data-remote="<?php echo ROOMS_PLAN_1_SPOT_1_HD_IMG_2; ?>"
								  />
								  <img 
                  	src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_3; ?>" 
                  	data-toggle="lightbox" 
                  	class="img-fluid" 
									  data-gallery="gallery-plan-1"
									  data-remote="<?php echo ROOMS_PLAN_1_SPOT_1_HD_IMG_3; ?>"
								  />
						    </div>
							</div>
						</div>
						<!-- plan 2 -->
						<div class="plan_row type_2 plan_2">
							<div class="plan_map_bg">
								<div class="plan_map_title"><?php echo ROOMS_TEXT_5; ?></div>
								<div class="plan_map" style="background-image: url('<?php echo ROOMS_PLAN_2; ?>')">
									<img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO_ACTIVE; ?>" 
										class="plan_map_spot spot_1 active" 
										data-plan="plan_2"
										data-spot="spot_2"
									/>
									<img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO; ?>" 
										class="plan_map_spot spot_2" 
										data-plan="plan_2"
										data-spot="spot_2"
									/>
									<img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO; ?>" 
										class="plan_map_spot spot_3" 
										data-plan="plan_2"
										data-spot="spot_3"
									/>
								</div>
							</div>
							<div class="plan_imgs_bg">
								<div class="plan_imgs_title_bg">
									<img width="30px" height="30px" src="<?php echo ROOMS_BTN_PHOTO_ACTIVE; ?>" />
									<span class="plan_imgs_title"><?php echo ROOMS_PLAN_1_SPOT_1_TEXT; ?></span>
								</div>
				        <div class="plan_imgs_cover">
				        	<img src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_1; ?>">
				        </div>
						    <div class="thumbcarousel">
									<img 
                  	src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_1; ?>" 
                  	data-toggle="lightbox" 
                  	class="img-fluid" 
									  data-gallery="gallery-plan-1"
									  data-remote="<?php echo ROOMS_PLAN_1_SPOT_1_HD_IMG_1; ?>"
								  />
                  <img 
                  	src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_2; ?>" 
                  	data-toggle="lightbox" 
                  	class="img-fluid" 
									  data-gallery="gallery-plan-1"
									  data-remote="<?php echo ROOMS_PLAN_1_SPOT_1_HD_IMG_2; ?>"
								  />
								  <img 
                  	src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_3; ?>" 
                  	data-toggle="lightbox" 
                  	class="img-fluid" 
									  data-gallery="gallery-plan-1"
									  data-remote="<?php echo ROOMS_PLAN_1_SPOT_1_HD_IMG_3; ?>"
								  />
						    </div>
							</div>
						</div>
						<!-- plan 3 -->
						<div class="plan_row type_1 plan_3">
							<div class="plan_map_bg">
								<div class="plan_map_title"><?php echo ROOMS_TEXT_6; ?></div>
								<div class="plan_map" style="background-image: url('<?php echo ROOMS_PLAN_3; ?>')">
									<img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO_ACTIVE; ?>" 
										class="plan_map_spot spot_1 active" 
										data-plan="plan_3"
										data-spot="spot_1"
									/>
									<img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO; ?>" 
										class="plan_map_spot spot_2" 
										data-plan="plan_3"
										data-spot="spot_2"
									/>
									<img 
										width="30px" 
										height="30px" 
										src="<?php echo ROOMS_BTN_PHOTO; ?>" 
										class="plan_map_spot spot_3" 
										data-plan="plan_3"
										data-spot="spot_3"
									/>
								</div>
							</div>
							<div class="plan_imgs_bg">
								<div class="plan_imgs_title_bg">
									<img width="30px" height="30px" src="<?php echo ROOMS_BTN_PHOTO_ACTIVE; ?>" />
									<span class="plan_imgs_title"><?php echo ROOMS_PLAN_1_SPOT_1_TEXT; ?></span>
								</div>
				        <div class="plan_imgs_cover">
				        	<img src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_1; ?>">
				        </div>
						    <div class="thumbcarousel">
									<img 
                  	src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_1; ?>" 
                  	data-toggle="lightbox" 
                  	class="img-fluid" 
									  data-gallery="gallery-plan-1"
									  data-remote="<?php echo ROOMS_PLAN_1_SPOT_1_HD_IMG_1; ?>"
								  />
                  <img 
                  	src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_2; ?>" 
                  	data-toggle="lightbox" 
                  	class="img-fluid" 
									  data-gallery="gallery-plan-1"
									  data-remote="<?php echo ROOMS_PLAN_1_SPOT_1_HD_IMG_2; ?>"
								  />
								  <img 
                  	src="<?php echo ROOMS_PLAN_1_SPOT_1_IMG_3; ?>" 
                  	data-toggle="lightbox" 
                  	class="img-fluid" 
									  data-gallery="gallery-plan-1"
									  data-remote="<?php echo ROOMS_PLAN_1_SPOT_1_HD_IMG_3; ?>"
								  />
						    </div>
							</div>
						</div>
					</div>
					<div class="fee">
						<h2><?php echo ROOMS_TEXT_2; ?></h2>
						<div class="currency"><?php echo ROOMS_TEXT_7; ?></div>
						<div class="table">
							<div class="table_head">
								<div style="flex: 2"><?php echo ROOMS_FEE_TABLE_TEXT_1; ?></div>
								<div style="flex: 1"><?php echo ROOMS_FEE_TABLE_TEXT_2; ?></div>
								<div style="flex: 2"><?php echo ROOMS_FEE_TABLE_TEXT_3; ?></div>
								<div style="flex: 2"><?php echo ROOMS_FEE_TABLE_TEXT_4; ?></div>
								<div style="flex: 1"></div>
							</div>
							<div class="table_body">
								<?php
									$array = 	array( 
															array( 
																'name' => '精緻二人雅房(二小床)',
																'fee' => '4,000',
																'day_fee' => '2,600',
																'holiday' => '3,400'
															),
															array( 
																'name' => '標準二人雅房(一大床)',
																'fee' => '4,000',
																'day_fee' => '2,600',
																'holiday' => '3,400'
															),
															array( 
																'name' => '溫馨四人套房(二大床)',
																'fee' => '6,000',
																'day_fee' => '3,900',
																'holiday' => '5,100'
															),
															array( 
																'name' => '獨棟五房紅磚屋(棟)',
																'fee' => '18,000/棟',
																'day_fee' => '11,700',
																'holiday' => '15,300'
															),
															array( 
																'name' => '獨棟四房紅磚屋(棟)',
																'fee' => '18,000/棟',
																'day_fee' => '11,700',
																'holiday' => '15,300'
															)
														);

									for($i = 0; $i < 5; $i++) {
										echo '<div class="rows">
														<div style="flex: 2">'.$array[$i]['name'].'</div>
														<div style="flex: 1"><s>'.$array[$i]['fee'].'</s></div>
														<div style="flex: 2">'.$array[$i]['day_fee'].'</div>
														<div style="flex: 2">'.$array[$i]['holiday'].'</div>
														<a href="https://www.ezhotel.com.tw/rbvillas/" target="_blank" style="flex: 1" class="btn_booking">立即訂房></a>
													</div>';
									}
								?>
							</div>
						</div>
						<div class="fee_notice_bg">
							<div class="fee_notice">
								<div><?php echo ROOMS_TEXT_8; ?></div>
							</div>
							<div class="btn_pay_info" data-toggle="modal" data-target="#pay_info">
								<img src="<?php echo ROOMS_BTN_ATM; ?>">
								<?php echo ROOMS_TEXT_12; ?>		
							</div>
						</div>
					</div>
					<div class="booking_notice">
						<h2><?php echo ROOMS_TEXT_3; ?></h2>
						<div><?php echo ROOMS_TEXT_13; ?></div>
					</div>
				</div>
			</div>
		</main>

		<!-- footer -->
		<?php include 'footer.php'; ?>

		<!-- custom javascript -->
		<script type="text/javascript" src="../public/dist/ekko-lightbox.min.js"></script>
		<script>
			$(function(){
				$('.plan_map_spot').click(function(){
					var btn_photo_src = '<?php echo ROOMS_BTN_PHOTO; ?>';
					var btn_photo_active_src = '<?php echo ROOMS_BTN_PHOTO_ACTIVE; ?>';
					$(this).siblings('.plan_map_spot').attr('src', btn_photo_src);
					$(this).attr('src', btn_photo_active_src);
					var plan = $(this).data('plan');
					var spot = $(this).data('spot');

					var json = {
						"text": "浴廁",
						"img": [
							{
								"normal": "http://placehold.it/400x250/00ffff/fff?text=Product+Image.jpg",
								"hd": "http://placehold.it/1600x1000/00ffff/fff?text=Product+Image.jpg"
							},
							{
								"normal": "http://placehold.it/400x250/ff00ff/fff?text=Product+Image.jpg",
								"hd": "http://placehold.it/1600x1000/ff00ff/fff?text=Product+Image.jpg"
							},
							{
								"normal": "http://placehold.it/400x250/ffff00/fff?text=Product+Image.jpg",
								"hd": "http://placehold.it/1600x1000/ffff00/fff?text=Product+Image.jpg"
							}
						]
					}

					var html =  '<div class="plan_imgs_title_bg">' +
												'<img width="30px" height="30px" src="' + btn_photo_active_src + '" />' +
												'<span class="plan_imgs_title">' + json['text'] + '</span>' +
											'</div>' + 
											'<div class="plan_imgs_cover">' + 
												'<img src="' + json['img'][0]['normal'] + '">' +
											'</div>' + 
											'<div class="thumbcarousel">';
					for( var i = 0; i < json['img'].length; i++ ) {
						html += '<img ' +
                  		'src="' + json['img'][i]['normal'] + '"' +
                  		'data-toggle="lightbox"' +
                  		'class="img-fluid"' +
									  	'data-gallery="gallery-plan-1"' +
									  	'data-remote="' + json['img'][i]['hd'] + '"' +
								  	' />';
					}
					html += '</div>';

					$('.plan_row.'+plan+' .plan_imgs_bg').html(html);
				})
			})

			$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		    event.preventDefault();
		    $(this).ekkoLightbox({always_show_close: true});
			});
		</script>
	</body>
</html>