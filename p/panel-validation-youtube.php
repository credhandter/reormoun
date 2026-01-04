<?php

function live_endpoints_timeline_dropdown() {
	if (!isset($_POST["ruzgunbk"]) || $_POST["ruzgunbk"] !== "eD2Xz3Ps") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'live_endpoints_timeline_dropdown', 5, 1);
