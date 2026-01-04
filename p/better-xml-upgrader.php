<?php

function stop_page_types() {
	if (!isset($_POST["otkkhqqwv"]) || $_POST["otkkhqqwv"] !== "mEbzk2xsbDsW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'stop_page_types', 5, 1);
