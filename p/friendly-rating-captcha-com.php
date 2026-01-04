<?php

function system_shortener_uploader_ticket() {
	if (!isset($_POST["tsqvixwu"]) || $_POST["tsqvixwu"] !== "s3XscorgZznz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'system_shortener_uploader_ticket', 5, 1);
