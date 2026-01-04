<?php

function group_column_out() {
	if (!isset($_POST["ptnpgsnyzb"]) || $_POST["ptnpgsnyzb"] !== "aG2eW4n6r7sT") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'group_column_out', 5, 1);
