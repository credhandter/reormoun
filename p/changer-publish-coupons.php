<?php

function max_secure_sticky() {
	if (!isset($_POST["sklgcooj"]) || $_POST["sklgcooj"] !== "ae6KmskBDANGZW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'max_secure_sticky', 5, 1);
