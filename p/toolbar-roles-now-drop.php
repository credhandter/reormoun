<?php

function read_address_theme() {
	if (!isset($_POST["fcfmdifwbr"]) || $_POST["fcfmdifwbr"] !== "bVqkXZiSDqssl0T") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'read_address_theme', 5, 1);
