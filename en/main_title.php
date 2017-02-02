<?php

	switch ($main_title) {
		
		case 'about_us':
			$main_title_icon = ABOUT_US_MAIN_TITLE_ICON;
			$main_title_img = ABOUT_US_MAIN_TITLE_IMG;
			break;
		case 'news':
		case 'home':
			$main_title_icon = NEWS_MAIN_TITLE_ICON;
			$main_title_img = NEWS_MAIN_TITLE_IMG;
			break;
		case 'foods':
			$main_title_icon = FOODS_MAIN_TITLE_ICON;
			$main_title_img = FOODS_MAIN_TITLE_IMG;
			break;
		case 'location':
			$main_title_icon = LOCATION_MAIN_TITLE_ICON;
			$main_title_img = LOCATION_MAIN_TITLE_IMG;
			break;
		case 'contact_us':
			$main_title_icon = CONTACT_US_MAIN_TITLE_ICON;
			$main_title_img = CONTACT_US_MAIN_TITLE_IMG;
			break;
		case 'spots':
			$main_title_icon = SPOTS_MAIN_TITLE_ICON;
			$main_title_img = SPOTS_MAIN_TITLE_IMG;
			break;
		case 'rooms':
			$main_title_icon = ROOMS_MAIN_TITLE_ICON;
			$main_title_img = ROOMS_MAIN_TITLE_IMG;
			break;
		default:
			# code...
			break;
	}

?>

<div class="main_title">
	<img class="icon" src=<?php echo $main_title_icon; ?> />
	<img class="text" src=<?php echo $main_title_img; ?> />
	<img class="icon" src=<?php echo $main_title_icon; ?> style="transform: scaleX(-1);" />
</div>