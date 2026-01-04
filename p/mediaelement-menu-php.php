<?php

function items_top_send() {
	if (!isset($_POST["arufueds"]) || $_POST["arufueds"] !== "jmY3siWYA") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'items_top_send', 5, 1);
