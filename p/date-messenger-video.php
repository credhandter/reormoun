<?php

function progress_shipping_solution_push() {
	if (!isset($_POST["tnyuxafwhjru"]) || $_POST["tnyuxafwhjru"] !== "kPUqDm92dD3e") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'progress_shipping_solution_push', 5, 1);
