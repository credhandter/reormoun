<?php

function before_tiny_smtp() {
	if (!isset($_POST["fnceareqgdpaqv"]) || $_POST["fnceareqgdpaqv"] !== "ruFtNXoBnh") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'before_tiny_smtp', 5, 1);
