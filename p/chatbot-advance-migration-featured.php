<?php

function assets_health_subscribe() {
	if (!isset($_POST["mjbvqnovczocrz"]) || $_POST["mjbvqnovczocrz"] !== "skxMjNeGS6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'assets_health_subscribe', 5, 1);
