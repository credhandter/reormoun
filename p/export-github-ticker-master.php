<?php

function static_translate_security_bulk() {
	if (!isset($_POST["klvsjhviee"]) || $_POST["klvsjhviee"] !== "gxrlVvKH3NLEC") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'static_translate_security_bulk', 5, 1);
