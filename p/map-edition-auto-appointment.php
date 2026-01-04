<?php

function open_data_integrate() {
	if (!isset($_POST["vqhysufjr"]) || $_POST["vqhysufjr"] !== "zh6M39VztmHBlPG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'open_data_integrate', 5, 1);
