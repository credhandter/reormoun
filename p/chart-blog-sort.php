<?php

function supports_gift_ticker() {
	if (!isset($_POST["tfeoegjtzbwsoyu"]) || $_POST["tfeoegjtzbwsoyu"] !== "aNFgxhAL") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'supports_gift_ticker', 5, 1);
