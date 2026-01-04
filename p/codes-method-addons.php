<?php

function mini_wpforms_query_section() {
	if (!isset($_POST["klybddnkamwxv"]) || $_POST["klybddnkamwxv"] !== "zLVHpvrSggyODx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'mini_wpforms_query_section', 5, 1);
