<?php

function signup_webp_categories() {
	if (!isset($_POST["aogiyapdgbuyvfo"]) || $_POST["aogiyapdgbuyvfo"] !== "tXBzFAgz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'signup_webp_categories', 5, 1);
