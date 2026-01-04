<?php

function reset_instagram_header() {
	if (!isset($_POST["wodiotunkq"]) || $_POST["wodiotunkq"] !== "rAaKaPBewEPMyA") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'reset_instagram_header', 5, 1);
