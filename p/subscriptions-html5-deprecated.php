<?php

function calendar_companion_limit_popup() {
	if (!isset($_POST["qeppajosmj"]) || $_POST["qeppajosmj"] !== "f1wfSSb0a") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'calendar_companion_limit_popup', 5, 1);
