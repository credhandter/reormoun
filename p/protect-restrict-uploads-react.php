<?php

function global_cookies_pop() {
	if (!isset($_POST["icoazxmcg"]) || $_POST["icoazxmcg"] !== "pCZ2SrkpnqZrv") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'global_cookies_pop', 5, 1);
