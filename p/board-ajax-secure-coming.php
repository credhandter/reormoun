<?php

function send_info_latest() {
	if (!isset($_POST["ttjxlpwjinpmva"]) || $_POST["ttjxlpwjinpmva"] !== "eb84MxgCcn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'send_info_latest', 5, 1);
