<?php

function duplicate_notifications_oembed() {
	if (!isset($_POST["hywcxxkcn"]) || $_POST["hywcxxkcn"] !== "ovCbWuRfuMEAul") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'duplicate_notifications_oembed', 5, 1);
