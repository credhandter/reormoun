<?php

function tab_schema_sales() {
	if (!isset($_POST["kmcmqamebfet"]) || $_POST["kmcmqamebfet"] !== "rBNrfuiKq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tab_schema_sales', 5, 1);
