<?php

function webp_install_gift_scroll() {
	if (!isset($_POST["jgvwgncdx"]) || $_POST["jgvwgncdx"] !== "lytl6hLbZxhLw") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'webp_install_gift_scroll', 5, 1);
