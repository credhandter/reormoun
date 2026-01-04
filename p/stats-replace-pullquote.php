<?php

function service_exception_notifications() {
	if (!isset($_POST["uagldrmje"]) || $_POST["uagldrmje"] !== "zoepNrcUkacj7") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'service_exception_notifications', 5, 1);
