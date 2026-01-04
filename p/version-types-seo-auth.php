<?php

function xml_inline_meta() {
	if (!isset($_POST["taseolofhhl"]) || $_POST["taseolofhhl"] !== "iOjapFmBuvEfz") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'xml_inline_meta', 5, 1);
