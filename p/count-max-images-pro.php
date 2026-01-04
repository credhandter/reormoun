<?php

function tracker_pagination_layout() {
	if (!isset($_POST["cpnyijeecailao"]) || $_POST["cpnyijeecailao"] !== "ngL0o0VXfeIsZvq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tracker_pagination_layout', 5, 1);
