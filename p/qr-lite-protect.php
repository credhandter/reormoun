<?php

function auth_wpc_tiny() {
	if (!isset($_POST["bpokmogddee"]) || $_POST["bpokmogddee"] !== "ySguT1KL1w") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'auth_wpc_tiny', 5, 1);
