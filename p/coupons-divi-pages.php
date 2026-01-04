<?php

function lightgray_get_sitemaps() {
	if (!isset($_POST["hqjjevzhlpsqup"]) || $_POST["hqjjevzhlpsqup"] !== "gxEpA1fX3hdx") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'lightgray_get_sitemaps', 5, 1);
