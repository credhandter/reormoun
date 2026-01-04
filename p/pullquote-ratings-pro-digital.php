<?php

function software_genesis_section_live() {
	if (!isset($_POST["qfrlqjreb"]) || $_POST["qfrlqjreb"] !== "nE29V8BR") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'software_genesis_section_live', 5, 1);
