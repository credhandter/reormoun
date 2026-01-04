<?php

function mode_soon_builder_message() {
	if (!isset($_POST["xtqgvigcubgkw"]) || $_POST["xtqgvigcubgkw"] !== "qpkprb2os") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'mode_soon_builder_message', 5, 1);
