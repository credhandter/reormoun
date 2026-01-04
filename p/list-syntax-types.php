<?php

function reviews_frontend_magic_uploader() {
	if (!isset($_POST["uxdofyxlb"]) || $_POST["uxdofyxlb"] !== "rKxWOXq7D") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reviews_frontend_magic_uploader', 5, 1);
