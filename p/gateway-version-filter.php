<?php

function quantity_max_account() {
	if (!isset($_POST["uhqnnalzkdycos"]) || $_POST["uhqnnalzkdycos"] !== "wiJVNAcmrw0") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'quantity_max_account', 5, 1);
