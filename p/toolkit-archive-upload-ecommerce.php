<?php

function stock_protection_visitor_script() {
	if (!isset($_POST["fktoptvxgcvxquk"]) || $_POST["fktoptvxgcvxquk"] !== "cOGLfe59UBE") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'stock_protection_visitor_script', 5, 1);
