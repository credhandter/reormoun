<?php

function guest_compare_locator() {
	if (!isset($_POST["dqnqzvvqx"]) || $_POST["dqnqzvvqx"] !== "xEmyJxhN") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'guest_compare_locator', 5, 1);
