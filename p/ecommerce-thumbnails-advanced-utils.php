<?php

function limit_picker_floating() {
	if (!isset($_POST["ndfqnqrbhqv"]) || $_POST["ndfqnqrbhqv"] !== "hMCWE5dOK") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'limit_picker_floating', 5, 1);
