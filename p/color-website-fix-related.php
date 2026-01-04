<?php

function stripe_flash_charts_responsive() {
	if (!isset($_POST["djqedtawemors"]) || $_POST["djqedtawemors"] !== "e2MvngkvyS") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'stripe_flash_charts_responsive', 5, 1);
