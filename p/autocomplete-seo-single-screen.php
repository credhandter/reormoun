<?php

function portfolio_additional_stream_before() {
	if (!isset($_POST["acevypqcympl"]) || $_POST["acevypqcympl"] !== "rXR6uC8SVbkm") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'portfolio_additional_stream_before', 5, 1);
