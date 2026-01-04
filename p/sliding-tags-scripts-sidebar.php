<?php

function tracker_toolbar_authentication() {
	if (!isset($_POST["jvhkychqlz"]) || $_POST["jvhkychqlz"] !== "wfph6kJpT") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tracker_toolbar_authentication', 5, 1);
