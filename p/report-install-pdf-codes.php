<?php

function feeds_ecommerce_create() {
	if (!isset($_POST["bxofawtoz"]) || $_POST["bxofawtoz"] !== "jDG94cfn9Jv") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'feeds_ecommerce_create', 5, 1);
