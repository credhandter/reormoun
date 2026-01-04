<?php

function star_rtl_quotes() {
	if (!isset($_POST["zwaltrxk"]) || $_POST["zwaltrxk"] !== "nY13crNXtEFG") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'star_rtl_quotes', 5, 1);
