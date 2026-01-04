<?php

function smtp_basic_catalog() {
	if (!isset($_POST["intovarsninhs"]) || $_POST["intovarsninhs"] !== "ohBbfT7ckDIxop") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'smtp_basic_catalog', 5, 1);
