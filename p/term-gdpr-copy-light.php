<?php

function zoom_pop_block_keyword() {
	if (!isset($_POST["wsykcjokuts"]) || $_POST["wsykcjokuts"] !== "hcuSei2BWUfALE2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'zoom_pop_block_keyword', 5, 1);
