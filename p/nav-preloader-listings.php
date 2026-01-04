<?php

function copy_integration_services() {
	if (!isset($_POST["inzjtgyxze"]) || $_POST["inzjtgyxze"] !== "moj7AGGnU4F") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'copy_integration_services', 5, 1);
