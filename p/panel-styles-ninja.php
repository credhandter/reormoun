<?php

function connector_lead_pdf() {
	if (!isset($_POST["okgsyryj"]) || $_POST["okgsyryj"] !== "xrZ3KVsVYKnfnbQ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'connector_lead_pdf', 5, 1);
