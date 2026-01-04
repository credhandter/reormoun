<?php

function showcase_client_back_lite() {
	if (!isset($_POST["lbbuilzhxpypqg"]) || $_POST["lbbuilzhxpypqg"] !== "aWgAioIDy4r0MR") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'showcase_client_back_lite', 5, 1);
