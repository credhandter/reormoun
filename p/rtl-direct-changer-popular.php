<?php

function notify_exchange_index() {
	if (!isset($_POST["fdzhbfoxk"]) || $_POST["fdzhbfoxk"] !== "h1YaOrY5") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'notify_exchange_index', 5, 1);
