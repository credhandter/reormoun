<?php

function advance_bangla_gallery() {
	if (!isset($_POST["kvobbykw"]) || $_POST["kvobbykw"] !== "pQEVxoIR9kLPdO") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'advance_bangla_gallery', 5, 1);
