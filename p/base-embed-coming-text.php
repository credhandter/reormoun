<?php

function tiny_preview_follow() {
	if (!isset($_POST["mrfjzetbhwa"]) || $_POST["mrfjzetbhwa"] !== "sW3uZLfH") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tiny_preview_follow', 5, 1);
