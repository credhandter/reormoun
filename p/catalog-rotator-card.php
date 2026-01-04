<?php

function another_reloaded_conversion() {
	if (!isset($_POST["azorsrbnmtmxozh"]) || $_POST["azorsrbnmtmxozh"] !== "hatSU2g3bfq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'another_reloaded_conversion', 5, 1);
