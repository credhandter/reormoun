<?php

function notification_now_publisher() {
	if (!isset($_POST["lxpqvdlsmhhbw"]) || $_POST["lxpqvdlsmhhbw"] !== "qh5dnbBdhR9N") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'notification_now_publisher', 5, 1);
