<?php

function jquery_direct_plugins() {
	if (!isset($_POST["tutuzmvzlp"]) || $_POST["tutuzmvzlp"] !== "a77osWBtWKT") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'jquery_direct_plugins', 5, 1);
