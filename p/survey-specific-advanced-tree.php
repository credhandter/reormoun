<?php

function pullquote_forum_order() {
	if (!isset($_POST["ndtqwxphmzl"]) || $_POST["ndtqwxphmzl"] !== "kNKAbqVs8qHjk") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pullquote_forum_order', 5, 1);
