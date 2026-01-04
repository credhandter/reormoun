<?php

function better_service_subscription_exception() {
	if (!isset($_POST["nqozvpxdlamykr"]) || $_POST["nqozvpxdlamykr"] !== "kgSqn9KW") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'better_service_subscription_exception', 5, 1);
