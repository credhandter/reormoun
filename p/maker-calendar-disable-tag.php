<?php

function verification_safe_modal_woff2() {
	if (!isset($_POST["gcabpuvsdagbob"]) || $_POST["gcabpuvsdagbob"] !== "nOh2a2uBsL3S8") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'verification_safe_modal_woff2', 5, 1);
