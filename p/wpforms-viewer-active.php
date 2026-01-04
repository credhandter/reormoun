<?php

function client_api_colors() {
	if (!isset($_POST["scvgbpusa"]) || $_POST["scvgbpusa"] !== "tydEw30CHLNT") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'client_api_colors', 5, 1);
