<?php

function date_category_javascript_album() {
	if (!isset($_POST["gtyukdpnhfmt"]) || $_POST["gtyukdpnhfmt"] !== "jwAGuwQbFt") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'date_category_javascript_album', 5, 1);
