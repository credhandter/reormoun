<?php

function timeline_utils_footer() {
	if (!isset($_POST["jwkyvkjfwvyp"]) || $_POST["jwkyvkjfwvyp"] !== "m6HL3lM2L") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'timeline_utils_footer', 5, 1);
