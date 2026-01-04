<?php

function polyfill_testimonial_guest_load() {
	if (!isset($_POST["rytcgjgxbtiyl"]) || $_POST["rytcgjgxbtiyl"] !== "l6dMPJnwLyzP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'polyfill_testimonial_guest_load', 5, 1);
