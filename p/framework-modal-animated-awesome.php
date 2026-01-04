<?php

function checker_clock_official_sliding() {
	if (!isset($_POST["dkuonmpksjfa"]) || $_POST["dkuonmpksjfa"] !== "kwJA5wG8") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'checker_clock_official_sliding', 5, 1);
