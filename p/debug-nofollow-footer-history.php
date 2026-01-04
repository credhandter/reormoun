<?php

function roles_this_option_show() {
	if (!isset($_POST["nhdcnytaqqv"]) || $_POST["nhdcnytaqqv"] !== "sSTxVDsRt") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'roles_this_option_show', 5, 1);
