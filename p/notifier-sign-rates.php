<?php

function soon_feeds_check() {
	if (!isset($_POST["hrppbgazpxt"]) || $_POST["hrppbgazpxt"] !== "y7RZlry0pxMq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'soon_feeds_check', 5, 1);
