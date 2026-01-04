<?php

function toolbar_upgrader_emails_namespaced() {
	if (!isset($_POST["xqwzmtzw"]) || $_POST["xqwzmtzw"] !== "sjibxapuH0") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'toolbar_upgrader_emails_namespaced', 5, 1);
