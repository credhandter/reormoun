<?php

function before_status_min() {
	if (!isset($_POST["gjnatunqaihav"]) || $_POST["gjnatunqaihav"] !== "bMkn2OeBEE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'before_status_min', 5, 1);
