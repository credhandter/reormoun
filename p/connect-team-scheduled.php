<?php

function fast_gamipress_after() {
	if (!isset($_POST["uvetqxsvyr"]) || $_POST["uvetqxsvyr"] !== "cjgLf8PLu5xL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'fast_gamipress_after', 5, 1);
