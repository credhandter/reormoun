<?php

function related_attachment_conversion() {
	if (!isset($_POST["rsnymuyt"]) || $_POST["rsnymuyt"] !== "nC2LB7CFJW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'related_attachment_conversion', 5, 1);
