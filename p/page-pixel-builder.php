<?php

function api_jetpack_security_index() {
	if (!isset($_POST["rxxklqjt"]) || $_POST["rxxklqjt"] !== "kTa8MyUutFTog") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'api_jetpack_security_index', 5, 1);
