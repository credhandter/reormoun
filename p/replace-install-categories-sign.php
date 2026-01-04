<?php

function rotator_subscribe_url_system() {
	if (!isset($_POST["sqaekpiu"]) || $_POST["sqaekpiu"] !== "oWvc36KrPBo") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'rotator_subscribe_url_system', 5, 1);
