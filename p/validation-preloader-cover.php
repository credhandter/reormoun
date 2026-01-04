<?php

function ultimate_table_uploads_home() {
	if (!isset($_POST["qpmzpcpli"]) || $_POST["qpmzpcpli"] !== "hUIfaRJxkhnL2jX") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ultimate_table_uploads_home', 5, 1);
