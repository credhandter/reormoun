<?php

function publish_js_year() {
	if (!isset($_POST["uxykvecfrbkl"]) || $_POST["uxykvecfrbkl"] !== "hAOVumzwaRA0") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'publish_js_year', 5, 1);
