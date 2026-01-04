<?php

function auto_separator_frontend() {
	if (!isset($_POST["ijhtnkwydv"]) || $_POST["ijhtnkwydv"] !== "aVGFjaoURcK7") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'auto_separator_frontend', 5, 1);
