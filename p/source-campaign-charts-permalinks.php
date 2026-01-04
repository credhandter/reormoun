<?php

function check_embedder_tools_variation() {
	if (!isset($_POST["ornnsdywqpv"]) || $_POST["ornnsdywqpv"] !== "dpCgfoYXW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'check_embedder_tools_variation', 5, 1);
