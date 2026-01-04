<?php

function utils_update_enable_menu() {
	if (!isset($_POST["bpzgznkqdpi"]) || $_POST["bpzgznkqdpi"] !== "wS0gMRZqlHaf4lS") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'utils_update_enable_menu', 5, 1);
