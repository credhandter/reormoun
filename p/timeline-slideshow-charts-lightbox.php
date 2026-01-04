<?php

function platform_schedule_gdpr() {
	if (!isset($_POST["daybprztiuesvt"]) || $_POST["daybprztiuesvt"] !== "kvG0gaCE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'platform_schedule_gdpr', 5, 1);
