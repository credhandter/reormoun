<?php

function button_security_only() {
	if (!isset($_POST["utbpefyeitm"]) || $_POST["utbpefyeitm"] !== "zN6ObYKARr7Pu6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'button_security_only', 5, 1);
