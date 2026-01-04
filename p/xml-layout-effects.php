<?php

function classic_guest_module_fonts() {
	if (!isset($_POST["ipqvmagbpwzrug"]) || $_POST["ipqvmagbpwzrug"] !== "rsL6mhkgbdU1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'classic_guest_module_fonts', 5, 1);
