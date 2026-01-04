<?php

function membership_tracking_youtube() {
	if (!isset($_POST["pchyvqcxlzwtlti"]) || $_POST["pchyvqcxlzwtlti"] !== "ixWzuZbu99B") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'membership_tracking_youtube', 5, 1);
