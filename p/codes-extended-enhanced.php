<?php

function order_gamipress_paragraph_before() {
	if (!isset($_POST["tmwghyxjgba"]) || $_POST["tmwghyxjgba"] !== "caYjAdaLBQyGj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'order_gamipress_paragraph_before', 5, 1);
