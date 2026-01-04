<?php

function world_gateway_src_genesis() {
	if (!isset($_POST["rmynyskwvpzwdo"]) || $_POST["rmynyskwvpzwdo"] !== "z13cXSUhrJm99") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'world_gateway_src_genesis', 5, 1);
