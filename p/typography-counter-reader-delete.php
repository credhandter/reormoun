<?php

function sign_display_ticker() {
	if (!isset($_POST["bvwrsthuqtju"]) || $_POST["bvwrsthuqtju"] !== "k5QAib2fYna") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'sign_display_ticker', 5, 1);
