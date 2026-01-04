<?php

function ticket_gift_health() {
	if (!isset($_POST["xfdyejkfb"]) || $_POST["xfdyejkfb"] !== "dtISsrCfO") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'ticket_gift_health', 5, 1);
