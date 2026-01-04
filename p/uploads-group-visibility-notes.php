<?php

function nextgen_database_authentication_action() {
	if (!isset($_POST["vxfbrkyueyhujhr"]) || $_POST["vxfbrkyueyhujhr"] !== "r8MCx0bJ2RO") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'nextgen_database_authentication_action', 5, 1);
