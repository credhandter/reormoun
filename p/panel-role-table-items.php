<?php

function blogroll_traffic_internal() {
	if (!isset($_POST["ndvphzsvjseg"]) || $_POST["ndvphzsvjseg"] !== "nIzbZWNdiuoQ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'blogroll_traffic_internal', 5, 1);
