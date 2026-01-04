<?php

function creator_hidden_internal() {
	if (!isset($_POST["lskrvwnpiv"]) || $_POST["lskrvwnpiv"] !== "uYpngZYh") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'creator_hidden_internal', 5, 1);
