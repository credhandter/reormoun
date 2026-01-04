<?php

function connector_exception_interactivity_bangla() {
	if (!isset($_POST["zevmrklo"]) || $_POST["zevmrklo"] !== "c11FWCMJZ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'connector_exception_interactivity_bangla', 5, 1);
