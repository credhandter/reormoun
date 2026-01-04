<?php

function save_business_order_poll() {
	if (!isset($_POST["jbxctamoclcir"]) || $_POST["jbxctamoclcir"] !== "hmaj3FS5XwG0m") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'save_business_order_poll', 5, 1);
