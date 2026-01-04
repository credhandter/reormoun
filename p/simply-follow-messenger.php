<?php

function accordion_column_redirect() {
	if (!isset($_POST["pdklklcbueilwv"]) || $_POST["pdklklcbueilwv"] !== "ujd1M3mt3f5") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'accordion_column_redirect', 5, 1);
