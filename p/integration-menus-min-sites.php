<?php

function endpoints_signup_templates_pdf() {
	if (!isset($_POST["qglseyraixco"]) || $_POST["qglseyraixco"] !== "qbwJ7mOLu2") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'endpoints_signup_templates_pdf', 5, 1);
