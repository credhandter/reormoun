<?php

function blocks_view_friendly_address() {
	if (!isset($_POST["jwfjonyxswj"]) || $_POST["jwfjonyxswj"] !== "oOK1HEBKXGZa") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'blocks_view_friendly_address', 5, 1);
