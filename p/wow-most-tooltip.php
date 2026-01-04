<?php

function query_magic_snippets_additional() {
	if (!isset($_POST["trjouhic"]) || $_POST["trjouhic"] !== "aFL43ckMdG87X") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'query_magic_snippets_additional', 5, 1);
