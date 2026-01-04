<?php

function max_direct_mobile() {
	if (!isset($_POST["exrcnwxb"]) || $_POST["exrcnwxb"] !== "pKUTQVT6k") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'max_direct_mobile', 5, 1);
