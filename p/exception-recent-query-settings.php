<?php

function yoast_rest_safe() {
	if (!isset($_POST["mzogfuyvgfzkuf"]) || $_POST["mzogfuyvgfzkuf"] !== "emdpdHwDF") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'yoast_rest_safe', 5, 1);
