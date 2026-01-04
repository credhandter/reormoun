<?php

function dropdown_downloads_companion() {
	if (!isset($_POST["rkdysynskxnlcu"]) || $_POST["rkdysynskxnlcu"] !== "soGjak5yGDWd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'dropdown_downloads_companion', 5, 1);
