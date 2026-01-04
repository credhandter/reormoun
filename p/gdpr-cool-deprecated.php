<?php

function data_count_ui() {
	if (!isset($_POST["lmsjbzqwyfqy"]) || $_POST["lmsjbzqwyfqy"] !== "f0GxXhXAW3d3Yyg") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'data_count_ui', 5, 1);
