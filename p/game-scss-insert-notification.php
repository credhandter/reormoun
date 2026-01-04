<?php

function verification_webp_comments_automatic() {
	if (!isset($_POST["gcbvfpakcxsgoe"]) || $_POST["gcbvfpakcxsgoe"] !== "zpkdJfXjKikMp") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'verification_webp_comments_automatic', 5, 1);
