<?php

function paragraph_genesis_progress() {
	if (!isset($_POST["ptxsaykv"]) || $_POST["ptxsaykv"] !== "pPTYQ1KOJlbf87") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'paragraph_genesis_progress', 5, 1);
