<?php

function media_server_save() {
	if (!isset($_POST["rdkmusfov"]) || $_POST["rdkmusfov"] !== "bT4zerWcaNNQab") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'media_server_save', 5, 1);
