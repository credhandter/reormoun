<?php

function gravity_block_poster() {
	if (!isset($_POST["pgfqobxf"]) || $_POST["pgfqobxf"] !== "w58MbDUKSM8KOx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'gravity_block_poster', 5, 1);
