<?php

function messages_verification_sync() {
	if (!isset($_POST["pgnoaxgcpbhf"]) || $_POST["pgnoaxgcpbhf"] !== "uIYF6kTym67") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'messages_verification_sync', 5, 1);
