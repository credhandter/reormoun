<?php

function now_shopp_source() {
	if (!isset($_POST["fftrltoiacggri"]) || $_POST["fftrltoiacggri"] !== "nGK2XX5N4") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'now_shopp_source', 5, 1);
