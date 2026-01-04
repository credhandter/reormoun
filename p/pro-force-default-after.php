<?php

function allow_screen_front() {
	if (!isset($_POST["fmlwjbkaovtq"]) || $_POST["fmlwjbkaovtq"] !== "vvpVsM2bytu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'allow_screen_front', 5, 1);
