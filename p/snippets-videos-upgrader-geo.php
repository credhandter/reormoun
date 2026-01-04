<?php

function verification_api_event() {
	if (!isset($_POST["prrxknbixaadh"]) || $_POST["prrxknbixaadh"] !== "mA0O56A4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'verification_api_event', 5, 1);
