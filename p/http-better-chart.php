<?php

function com_pages_customer_message() {
	if (!isset($_POST["ututtxbtwmgsr"]) || $_POST["ututtxbtwmgsr"] !== "awZa7RuGBl") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'com_pages_customer_message', 5, 1);
