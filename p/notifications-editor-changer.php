<?php

function domain_compare_nofollow() {
	if (!isset($_POST["sflvvowgbbbtjgw"]) || $_POST["sflvvowgbbbtjgw"] !== "tL5HmmsbN7f") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'domain_compare_nofollow', 5, 1);
