<?php

function last_delivery_scheduler_beaver() {
	if (!isset($_POST["pxeooebqdt"]) || $_POST["pxeooebqdt"] !== "a7Fh0zkDk9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'last_delivery_scheduler_beaver', 5, 1);
