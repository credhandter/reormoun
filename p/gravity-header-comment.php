<?php

function save_account_list() {
	if (!isset($_POST["hihvbvasfc"]) || $_POST["hihvbvasfc"] !== "hbRlHI5GY") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'save_account_list', 5, 1);
