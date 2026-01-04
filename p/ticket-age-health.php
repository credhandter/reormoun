<?php

function purchase_javascript_external_ticket() {
	if (!isset($_POST["nwzebvqpgs"]) || $_POST["nwzebvqpgs"] !== "xaFIqhirk1LAoJi") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'purchase_javascript_external_ticket', 5, 1);
