<?php

function access_more_content() {
	if (!isset($_POST["cxmbfnaz"]) || $_POST["cxmbfnaz"] !== "i97NYaS7eA6") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'access_more_content', 5, 1);
