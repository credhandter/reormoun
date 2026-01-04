<?php

function pagination_headers_subscription_appointment() {
	if (!isset($_POST["epgevanmtnulc"]) || $_POST["epgevanmtnulc"] !== "xQbJz6tu2V") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'pagination_headers_subscription_appointment', 5, 1);
