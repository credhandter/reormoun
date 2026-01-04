<?php

function rotator_app_global_pinterest() {
	if (!isset($_POST["hcldqsij"]) || $_POST["hcldqsij"] !== "bcIyY1BqJAP") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rotator_app_global_pinterest', 5, 1);
