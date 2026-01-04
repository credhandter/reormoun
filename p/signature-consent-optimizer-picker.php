<?php

function verification_menu_headers() {
	if (!isset($_POST["pshlkqcdyuyb"]) || $_POST["pshlkqcdyuyb"] !== "ykdqmA57yQbms") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'verification_menu_headers', 5, 1);
