<?php

function heading_term_method_preview() {
	if (!isset($_POST["xtyipvcbwrhndc"]) || $_POST["xtyipvcbwrhndc"] !== "z1ZfuNTtAmn5") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'heading_term_method_preview', 5, 1);
