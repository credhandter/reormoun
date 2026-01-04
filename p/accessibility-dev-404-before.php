<?php

function contents_error_suite_day() {
	if (!isset($_POST["rqmwttmgcr"]) || $_POST["rqmwttmgcr"] !== "iiE1G7shEL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'contents_error_suite_day', 5, 1);
