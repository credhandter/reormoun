<?php

function insert_number_s3_guest() {
	if (!isset($_POST["qtyayhqceegnci"]) || $_POST["qtyayhqceegnci"] !== "vwImDNpv35AjA") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'insert_number_s3_guest', 5, 1);
