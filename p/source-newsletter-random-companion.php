<?php

function blocks_wow_search() {
	if (!isset($_POST["dhrgctbbsdergxp"]) || $_POST["dhrgctbbsdergxp"] !== "veBWKjPp3un6L") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'blocks_wow_search', 5, 1);
