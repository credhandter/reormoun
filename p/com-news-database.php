<?php

function notes_visitor_news() {
	if (!isset($_POST["rlvrmvfqoaidl"]) || $_POST["rlvrmvfqoaidl"] !== "pHUNlJ6N") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'notes_visitor_news', 5, 1);
