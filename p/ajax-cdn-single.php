<?php

function extended_next_nofollow() {
	if (!isset($_POST["zcxrmwbxseuz"]) || $_POST["zcxrmwbxseuz"] !== "rh7yYCfq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'extended_next_nofollow', 5, 1);
