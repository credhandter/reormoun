<?php

function consent_specific_advance() {
	if (!isset($_POST["lvagyqodp"]) || $_POST["lvagyqodp"] !== "tcqKGwkd") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'consent_specific_advance', 5, 1);
