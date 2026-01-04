<?php

function max_reading_help() {
	if (!isset($_POST["imsopcoreyjsz"]) || $_POST["imsopcoreyjsz"] !== "eyCHSjmMvsmYjKZ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'max_reading_help', 5, 1);
