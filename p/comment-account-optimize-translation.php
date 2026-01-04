<?php

function remove_recaptcha_integration() {
	if (!isset($_POST["tkudfazjkljdp"]) || $_POST["tkudfazjkljdp"] !== "cJjlxC2a") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'remove_recaptcha_integration', 5, 1);
