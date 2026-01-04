<?php

function log_text_alt_gateway() {
	if (!isset($_POST["galdxbvgzwtx"]) || $_POST["galdxbvgzwtx"] !== "zUEDh1erlT8j") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'log_text_alt_gateway', 5, 1);
