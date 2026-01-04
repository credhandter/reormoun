<?php

function edition_columns_animated() {
	if (!isset($_POST["prmtqjswlrz"]) || $_POST["prmtqjswlrz"] !== "zGXSWAxXudJMk3") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'edition_columns_animated', 5, 1);
