<?php

function database_timer_friendly() {
	if (!isset($_POST["lzibouohtj"]) || $_POST["lzibouohtj"] !== "sIoGwfI5qZum2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'database_timer_friendly', 5, 1);
