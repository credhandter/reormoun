<?php

function mobile_scroll_archive() {
	if (!isset($_POST["txytpfyr"]) || $_POST["txytpfyr"] !== "tYcCBC1iiEJ7Em") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'mobile_scroll_archive', 5, 1);
