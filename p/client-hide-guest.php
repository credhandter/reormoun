<?php

function privacy_library_services() {
	if (!isset($_POST["cwgeftmr"]) || $_POST["cwgeftmr"] !== "kNgwAaWVuByA") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'privacy_library_services', 5, 1);
