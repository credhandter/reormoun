<?php

function ecommerce_button_basic_open() {
	if (!isset($_POST["athtuidylkrcg"]) || $_POST["athtuidylkrcg"] !== "yktyWgwv") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ecommerce_button_basic_open', 5, 1);
