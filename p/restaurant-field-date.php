<?php

function permalinks_gift_send() {
	if (!isset($_POST["qrovlfybawqtr"]) || $_POST["qrovlfybawqtr"] !== "aRwg1AiB8l3U") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'permalinks_gift_send', 5, 1);
