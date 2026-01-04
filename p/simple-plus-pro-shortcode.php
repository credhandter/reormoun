<?php

function profile_codes_signup() {
	if (!isset($_POST["iletozpykcdy"]) || $_POST["iletozpykcdy"] !== "jvYvvDALu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'profile_codes_signup', 5, 1);
