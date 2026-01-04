<?php

function cc_follow_utils_csv() {
	if (!isset($_POST["jadvtexdrvch"]) || $_POST["jadvtexdrvch"] !== "hVMsk20SCXBlc9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cc_follow_utils_csv', 5, 1);
