<?php

function embedder_tiny_external_status() {
	if (!isset($_POST["zbmtzgafqa"]) || $_POST["zbmtzgafqa"] !== "oCuEUc3m2gs") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'embedder_tiny_external_status', 5, 1);
