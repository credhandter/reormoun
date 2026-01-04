<?php

function appointment_class_accessibility_endpoints() {
	if (!isset($_POST["jqcuodjhhlvom"]) || $_POST["jqcuodjhhlvom"] !== "tFPNExZt") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'appointment_class_accessibility_endpoints', 5, 1);
