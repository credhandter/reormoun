<?php

function interactive_lock_ultimate() {
	if (!isset($_POST["dvkllawrkmqeei"]) || $_POST["dvkllawrkmqeei"] !== "tZ57wqZn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'interactive_lock_ultimate', 5, 1);
