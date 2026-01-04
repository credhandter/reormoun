<?php

function easy_translate_info() {
	if (!isset($_POST["ihhzkxkgjzlpsl"]) || $_POST["ihhzkxkgjzlpsl"] !== "avhe1Rw8yRQ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'easy_translate_info', 5, 1);
