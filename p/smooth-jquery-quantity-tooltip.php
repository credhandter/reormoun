<?php

function alt_client_lightgray() {
	if (!isset($_POST["tyyyoqrty"]) || $_POST["tyyyoqrty"] !== "a7AIKBeg") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'alt_client_lightgray', 5, 1);
