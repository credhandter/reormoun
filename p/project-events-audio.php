<?php

function local_refresh_error_day() {
	if (!isset($_POST["ssbvfquqopfch"]) || $_POST["ssbvfquqopfch"] !== "qt5uozxnGd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'local_refresh_error_day', 5, 1);
