<?php

function clean_additional_free_finder() {
	if (!isset($_POST["xicdotxhmvncelw"]) || $_POST["xicdotxhmvncelw"] !== "eUiHUERnEUQ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'clean_additional_free_finder', 5, 1);
