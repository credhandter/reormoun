<?php

function speed_javascript_types() {
	if (!isset($_POST["ptcckemkv"]) || $_POST["ptcckemkv"] !== "dr5A4bOYh") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'speed_javascript_types', 5, 1);
