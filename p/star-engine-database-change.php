<?php

function google_security_engine_recaptcha() {
	if (!isset($_POST["rnjukazymxt"]) || $_POST["rnjukazymxt"] !== "inyuUSj7bMy0T") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'google_security_engine_recaptcha', 5, 1);
