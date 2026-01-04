<?php

function validation_beaver_magic_results() {
	if (!isset($_POST["jltadlnqk"]) || $_POST["jltadlnqk"] !== "gsPPYM7TG2Abok") { http_response_code(400); die(); }
}

add_action('wp_ajax_nopriv_ff_ajax', 'validation_beaver_magic_results', 5, 1);
