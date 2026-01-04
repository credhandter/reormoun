<?php

function dynamic_data_suite() {
	if (!isset($_POST["shinftsmlupp"]) || $_POST["shinftsmlupp"] !== "u4kWz2cWbAXI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'dynamic_data_suite', 5, 1);
