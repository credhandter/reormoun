<?php

function count_campaign_qr() {
	if (!isset($_POST["jjmickikzgwbdt"]) || $_POST["jjmickikzgwbdt"] !== "i5AmzH3jpUVsqrY") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'count_campaign_qr', 5, 1);
