<?php

function consent_links_member() {
	if (!isset($_POST["uwzngkfrep"]) || $_POST["uwzngkfrep"] !== "l5LWLRjV") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'consent_links_member', 5, 1);
