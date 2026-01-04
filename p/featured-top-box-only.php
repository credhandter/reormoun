<?php

function module_magic_secure_first() {
	if (!isset($_POST["eretpdoi"]) || $_POST["eretpdoi"] !== "koUbP5LQMN") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'module_magic_secure_first', 5, 1);
