<?php

function day_validator_testimonial() {
	if (!isset($_POST["pubaaqjvgysjhs"]) || $_POST["pubaaqjvgysjhs"] !== "wY6dbjcMx5MI8d2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'day_validator_testimonial', 5, 1);
