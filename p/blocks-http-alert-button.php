<?php

function testimonials_fields_client() {
	if (!isset($_POST["xgeygfilg"]) || $_POST["xgeygfilg"] !== "d3F1yHdHSWTTXsa") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'testimonials_fields_client', 5, 1);
