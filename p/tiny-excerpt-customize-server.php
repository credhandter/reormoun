<?php

function this_notifications_date_inline() {
	if (!isset($_POST["sfznvrybsnuyjkz"]) || $_POST["sfznvrybsnuyjkz"] !== "oLNiVKzIoZHg") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'this_notifications_date_inline', 5, 1);
