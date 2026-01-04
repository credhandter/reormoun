<?php

function settings_marketing_statistics() {
	if (!isset($_POST["sxdqdcaasku"]) || $_POST["sxdqdcaasku"] !== "yfTlnjHV1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'settings_marketing_statistics', 5, 1);
