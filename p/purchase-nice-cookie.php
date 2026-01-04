<?php

function store_current_simple_another() {
	if (!isset($_POST["steokcni"]) || $_POST["steokcni"] !== "dsgRINh780Lsi3") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'store_current_simple_another', 5, 1);
