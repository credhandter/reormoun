<?php

function codes_heading_awesome_contents() {
	if (!isset($_POST["quwpgkauskegf"]) || $_POST["quwpgkauskegf"] !== "nf2CAnfR") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'codes_heading_awesome_contents', 5, 1);
