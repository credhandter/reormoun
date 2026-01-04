<?php

function blocker_out_privacy_mini() {
	if (!isset($_POST["ealzskat"]) || $_POST["ealzskat"] !== "npYp5E4ILzLzP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'blocker_out_privacy_mini', 5, 1);
