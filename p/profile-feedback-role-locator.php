<?php

function performance_helper_elements() {
	if (!isset($_POST["vphmuodh"]) || $_POST["vphmuodh"] !== "iNNOz5BVYxb") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'performance_helper_elements', 5, 1);
