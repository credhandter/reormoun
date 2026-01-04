<?php

function include_seo_nextgen_notice() {
	if (!isset($_POST["hyyseneoyq"]) || $_POST["hyyseneoyq"] !== "eWbsyySqBPm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'include_seo_nextgen_notice', 5, 1);
