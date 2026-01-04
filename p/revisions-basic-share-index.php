<?php

function allow_quote_jigoshop() {
	if (!isset($_POST["lmbeqhqzf"]) || $_POST["lmbeqhqzf"] !== "l80RMZUQ1NMdGb") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'allow_quote_jigoshop', 5, 1);
