<?php

function template_out_sales_force() {
	if (!isset($_POST["qclmdufkxxrf"]) || $_POST["qclmdufkxxrf"] !== "y2efE50b") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'template_out_sales_force', 5, 1);
