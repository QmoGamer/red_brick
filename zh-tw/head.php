<head>
	<!-- title -->
	<title><?php echo $title; ?></title>
	<!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1.0">
	<link rel="alternate" hreflang="zh-TW" href="http://rbvillas.mmweb.tw/zh-tw" />
	<meta http-equiv="Cache-control" content="public">
	<meta http-equiv="content-language" content="zh-TW">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="subject" content="紅磚屋特色民宿"/>
	<meta name="keywords" content= "紅磚屋,苗栗,南庄民宿,南庄,苗栗紅磚屋,住宿,民宿,特色民宿,南庄住宿,南庄老街" />
	<meta name="description" content="「紅磚屋」位於南庄鄉南江村里金館，紅磚銀瓦的房舍，在好山好水的南庄裡，屬於別墅型的特色民宿。「紅磚屋」視野寬廣，園內花木扶疏，庭院綠草如茵，屋內廚房設備齊全，可自行煮炊烤肉，最適合家庭親子聚會。" /> 
	<meta name="copyright" content="Copyright © 2016 紅磚屋特色民宿版權所有" />
	<!--FB-->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="紅磚屋特色民宿" />
  <meta property="og:url" content="http://www.rbvillas.com" />
  <meta property="og:title" content="紅磚屋特色民宿" />
  <meta property="og:description" content="「紅磚屋」位於南庄鄉南江村里金館，紅磚銀瓦的房舍，在好山好水的南庄裡，屬於別墅型的特色民宿。「紅磚屋」視野寬廣，園內花木扶疏，庭院綠草如茵，屋內廚房設備齊全，可自行煮炊烤肉，最適合家庭親子聚會。" />
  <meta property="og:image" content="http://www.rbvillas.com/images/FB-1200x630.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="fb:app_id" content="" />
	<!-- css -->
	<link rel="shortcut icon" sizes="16x16 32x32 48x48 64x64 128x128" href="../public/images/favicon/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/dist/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="../public/dist/animate.css">
	<link rel="stylesheet" type="text/css" href="../public/dist/hambur_icon.css">
	<link rel="stylesheet" type="text/css" href="../public/dist/ekko-lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="../public/dist/qmo.css">
	<!-- script -->
	<script type="text/javascript" src="../public/js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="../public/dist/moment.min.js"></script>
	<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../public/dist/bootstrap-datetimepicker.min.js"></script>
	<!-- custom javascript -->
	<script>
		$(function () {
			$('#btn_burger_menu').click(function() {

				// $('#booking_check_in, #booking_check_out').datetimepicker('hide')
				
				if( $('#nav-icon3').hasClass('open') ) {
					$('#nav-icon3').removeClass('open');
					$('html').removeClass('no-scroll');
					$('.burger_menu').removeClass('open');
					$('#btn_burger_menu').css('background-color', '#b62805');
					$('.menu_text').show();
				} else {
					$('#nav-icon3').addClass('open');
					$('html').addClass('no-scroll');
					$('.burger_menu').addClass('open');
					$('#btn_burger_menu').css('background-color', '#fff');
					$('.menu_text').hide();
				}
			})

			// datetimepicker
     //  $('#booking_check_in').datetimepicker({
     //      format: 'MM/DD        /YYYY',
     //      ignoreReadonly: true,
     //      focusOnShow: false,
     //      widgetPositioning: {
     //      	horizontal: 'left',
     //      	vertical: 'bottom'
     //      }
     //  }).on('dp.show', function (e) {
     //  	console.log($('#booking_check_in').data("DateTimePicker"))
	    // 	$('#booking_check_out').data("DateTimePicker").hide()
	    // })
	    
     //  $('#booking_check_out').datetimepicker({
     //      format: 'MM/DD        /YYYY',
     //      ignoreReadonly: true,
     //      focusOnShow: false,
     //      widgetPositioning: {
     //      	horizontal: 'left',
     //      	vertical: 'bottom'
     //      },   
     //  }).on('dp.show', function (e) {
     //  	console.log($('#booking_check_in').data("DateTimePicker"))
	    // 	$('#booking_check_in').data("DateTimePicker").hide()
	    // })

      // mobile readonly 
      $('input[readonly]').focus(function(){
			    this.blur();
			})

			// scroll down
			$(document).on('click', '.scroll-btn > a', function(event){
		    event.preventDefault();

		    $('html, body').animate({ scrollTop: $( $.attr(this, 'href') ).offset().top }, 1000);
			});

			// btn scroll top
			$(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('.btn_to_top').fadeIn();
        } else {
          $('.btn_to_top').fadeOut();
        }
	    });

	    $('.btn_to_top').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1000);
	    });
		})
	</script>
	<!-- Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-83869866-12', 'auto');
	  ga('send', 'pageview');
	</script>
</head>