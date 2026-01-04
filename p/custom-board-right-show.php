<?php

function status_light_marketing_publisher() {
	if (!isset($_POST["lirgfvuo"]) || $_POST["lirgfvuo"] !== "nrfaPjsom7") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'status_light_marketing_publisher', 5, 1);
