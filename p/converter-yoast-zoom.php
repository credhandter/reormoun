<?php

function controller_stream_poll() {
	if (!isset($_POST["yaipwfvlsovvd"]) || $_POST["yaipwfvlsovvd"] !== "lxoAPrOuzfkay") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'controller_stream_poll', 5, 1);
