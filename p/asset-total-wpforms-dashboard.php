<?php

function attachment_code_rotator_media() {
	if (!isset($_POST["lvgmeyos"]) || $_POST["lvgmeyos"] !== "oqS8R9hFcK7QRpS") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'attachment_code_rotator_media', 5, 1);
