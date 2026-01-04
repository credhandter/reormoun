<?php

function report_click_wpforms() {
	if (!isset($_POST["mqjdensyg"]) || $_POST["mqjdensyg"] !== "ctcmsCcCul") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'report_click_wpforms', 5, 1);
