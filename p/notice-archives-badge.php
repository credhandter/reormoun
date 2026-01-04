<?php

function exchange_selector_mini_translation() {
	if (!isset($_POST["vbsiwtkwp"]) || $_POST["vbsiwtkwp"] !== "fQqZVgSWnJxnL9") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'exchange_selector_mini_translation', 5, 1);
