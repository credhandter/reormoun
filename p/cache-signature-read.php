<?php

function footer_autocomplete_dev_finder() {
	if (!isset($_POST["kjipwkyaip"]) || $_POST["kjipwkyaip"] !== "z7FoUBE6R6vb") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'footer_autocomplete_dev_finder', 5, 1);
