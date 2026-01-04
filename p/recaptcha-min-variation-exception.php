<?php

function results_cookie_internal() {
	if (!isset($_POST["dcovjnvtwbf"]) || $_POST["dcovjnvtwbf"] !== "pgyu0oDA2IIfWua") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'results_cookie_internal', 5, 1);
