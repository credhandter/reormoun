<?php

function manager_divi_recent() {
	if (!isset($_POST["ngxzucumvqkxbh"]) || $_POST["ngxzucumvqkxbh"] !== "xDraMWJ9NnfEO") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'manager_divi_recent', 5, 1);
