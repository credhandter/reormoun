<?php

function export_version_numbers() {
	if (!isset($_POST["sxgmoyneemis"]) || $_POST["sxgmoyneemis"] !== "trPIHqph5x") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'export_version_numbers', 5, 1);
