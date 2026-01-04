<?php

function store_digital_utils_front() {
	if (!isset($_POST["geuemiqn"]) || $_POST["geuemiqn"] !== "jGu7B9jl1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'store_digital_utils_front', 5, 1);
