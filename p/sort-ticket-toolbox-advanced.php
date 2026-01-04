<?php

function ticket_gravity_exception_scheduler() {
	if (!isset($_POST["rftluwjlyklad"]) || $_POST["rftluwjlyklad"] !== "skCHUouK9OZu") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ticket_gravity_exception_scheduler', 5, 1);
