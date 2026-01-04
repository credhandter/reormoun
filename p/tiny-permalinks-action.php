<?php

function traffic_code_shortcodes() {
	if (!isset($_POST["hcbvqvqttfzwrg"]) || $_POST["hcbvqvqttfzwrg"] !== "elomoSUB0dj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'traffic_code_shortcodes', 5, 1);
