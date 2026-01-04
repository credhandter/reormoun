<?php

function upload_view_wow_events() {
	if (!isset($_POST["ugjcpnkvtf"]) || $_POST["ugjcpnkvtf"] !== "zYA1cXHkxKNFJ") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'upload_view_wow_events', 5, 1);
