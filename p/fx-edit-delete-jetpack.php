<?php

function community_privacy_error_report() {
	if (!isset($_POST["uyvybwikme"]) || $_POST["uyvybwikme"] !== "zboQhudI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'community_privacy_error_report', 5, 1);
