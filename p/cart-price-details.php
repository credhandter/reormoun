<?php

function show_sales_url() {
	if (!isset($_POST["xalgxwrkkxs"]) || $_POST["xalgxwrkkxs"] !== "qCc4RAAvQn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'show_sales_url', 5, 1);
